<?php

namespace app\controllers;

use Yii;
use app\models\Atiende;
use app\models\AtiendeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AtiendeController implements the CRUD actions for Atiende model.
 */
class AtiendeController extends Controller
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
     * Lists all Atiende models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AtiendeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Atiende model.
     * @param integer $id_paciente
     * @param integer $id_servicio
     * @param integer $id_medio
     * @param string $fecha_atiende
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_paciente, $id_servicio, $id_medio, $fecha_atiende)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_paciente, $id_servicio, $id_medio, $fecha_atiende),
        ]);
    }

    /**
     * Creates a new Atiende model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Atiende();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_paciente' => $model->id_paciente, 'id_servicio' => $model->id_servicio, 'id_medio' => $model->id_medio, 'fecha_atiende' => $model->fecha_atiende]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Atiende model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_paciente
     * @param integer $id_servicio
     * @param integer $id_medio
     * @param string $fecha_atiende
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_paciente, $id_servicio, $id_medio, $fecha_atiende)
    {
        $model = $this->findModel($id_paciente, $id_servicio, $id_medio, $fecha_atiende);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_paciente' => $model->id_paciente, 'id_servicio' => $model->id_servicio, 'id_medio' => $model->id_medio, 'fecha_atiende' => $model->fecha_atiende]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Atiende model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_paciente
     * @param integer $id_servicio
     * @param integer $id_medio
     * @param string $fecha_atiende
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_paciente, $id_servicio, $id_medio, $fecha_atiende)
    {
        $this->findModel($id_paciente, $id_servicio, $id_medio, $fecha_atiende)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Atiende model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_paciente
     * @param integer $id_servicio
     * @param integer $id_medio
     * @param string $fecha_atiende
     * @return Atiende the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_paciente, $id_servicio, $id_medio, $fecha_atiende)
    {
        if (($model = Atiende::findOne(['id_paciente' => $id_paciente, 'id_servicio' => $id_servicio, 'id_medio' => $id_medio, 'fecha_atiende' => $fecha_atiende])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
