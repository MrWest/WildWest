<?php

class ToursController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/tours';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','transfer'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $model=new Comment();
        if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        if(isset($_POST['Comment']))
        {
            $model->attributes=$_POST['Comment'];
            $model->tours_id=$id;
            $namephoto = $model->name_owner;
            $uploadedFile = CUploadedFile::getInstance($model,'photo_owner');
            $fileName = "{$namephoto}-{$uploadedFile}";
            $model->photo_owner = $fileName;
            if($model->save()){
                if(!empty($uploadedFile))  // checkeamos si el archivo subido esta seteado o no
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../images/pic_comments/'.$fileName);
                }
                //$this->redirect(array('/comment/view','id'=>$model->id));
                $this->refresh();
            }


        }
        $this->render('view',array(
             'model'=>$this->loadModel($id),
         ));


	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Tours;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Tours']))
		{
			$model->attributes=$_POST['Tours'];
			if($model->save())
				$this->redirect(array('place/create'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tours']))
		{
			$model->attributes=$_POST['Tours'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dependecy = new CDbCacheDependency('SELECT COUNT(id) FROM Tours');
		$dataProvider = new CActiveDataProvider(Tours::model()->cache(3600*24,$dependecy));
//		$dataProvider=new CActiveDataProvider('Tours');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tours('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tours']))
			$model->attributes=$_GET['Tours'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tours the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tours::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tours $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tours-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    public function actionTransfer(){
        if(Yii::app()->getLanguage()=='en'){
            $this->render('transfer');
        }
        if(Yii::app()->getLanguage()=='fr'){
            $this->render('transfer_fr');
        }
		if(Yii::app()->getLanguage()=='it'){
			$this->render('transfer_it');
		}
    }
	public function getCommentsNum($id){

		$count = Comment::model()->countByAttributes(array(
			'tours_id'=> $id
		));
     return $count;
	}
}
