<?php

namespace app\controllers;

use Yii;
use app\models\Asociado;
use app\models\AsociadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsociadoController implements the CRUD actions for Asociado model.
 */
class AsociadoController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Asociado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AsociadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Asociado model.
     * @param integer $id_pieza
     * @param integer $id_servicio
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pieza, $id_servicio)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pieza, $id_servicio),
        ]);
    }

    /**
     * Creates a new Asociado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Asociado();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pieza' => $model->id_pieza, 'id_servicio' => $model->id_servicio]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Asociado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_pieza
     * @param integer $id_servicio
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pieza, $id_servicio)
    {
        $model = $this->findModel($id_pieza, $id_servicio);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pieza' => $model->id_pieza, 'id_servicio' => $model->id_servicio]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Asociado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_pieza
     * @param integer $id_servicio
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pieza, $id_servicio)
    {
        $this->findModel($id_pieza, $id_servicio)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Asociado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_pieza
     * @param integer $id_servicio
     * @return Asociado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pieza, $id_servicio)
    {
        if (($model = Asociado::findOne(['id_pieza' => $id_pieza, 'id_servicio' => $id_servicio])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
