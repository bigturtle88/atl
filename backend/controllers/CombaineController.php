<?php

namespace backend\controllers;

use Yii;
use backend\models\Combaine;
use backend\models\CombaineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Region;
use backend\models\Excursion;
use backend\models\TypeCost;

/**
 * CombaineController implements the CRUD actions for Combaine model.
 */
class CombaineController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Combaine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CombaineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $excursion =(new Excursion())->excursionList;
        $region = (new Region())->regionList;
        $typeCost =(new TypeCost())->typeCostList;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'excursion' => $excursion,
            'region' =>  $region,
            'typeCost' =>  $typeCost
        ]);
    }

    /**
     * Displays a single Combaine model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Combaine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Combaine();
        $excursion = (new Excursion())->excursionList;
        $region = (new Region())->regionList;
        $typeCost = (new TypeCost())->typeCostList;


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'excursion' => $excursion,
            'region' =>  $region,
            'typeCost' =>  $typeCost
        ]);
    }

    /**
     * Updates an existing Combaine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $excursion =(new Excursion())->excursionList;
        $region = (new Region())->regionList;
        $typeCost =(new TypeCost())->typeCostList;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'excursion' => $excursion,
            'region' =>  $region,
            'typeCost' =>  $typeCost
        ]);
    }

    /**
     * Deletes an existing Combaine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Combaine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Combaine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Combaine::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
