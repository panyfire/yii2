<?php

namespace frontend\controllers;

use common\models\User;
use yii\data\Pagination;
use yii\web\Controller;
use  common\models\Post;
use common\models\PostForm;
use yii\web\IdentityInterface;


class PostController extends Controller{

    public function actionPosts(){

        $query = Post::find()->select('id, title, text')->where(['status_id' => 1]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();



        $form = new PostForm();

        if($form->load(\Yii::$app->request->post()) && !(\Yii::$app->user->isGuest) ){

            if($form->save() && !(\Yii::$app->user->isGuest)){
                \Yii::$app->session->setFlash('success', 'Статья добавлена. Дождитесь пока модератор опубликует вашу запись.');

                return $this->refresh();
            }
        }
        else{
            if(\Yii::$app->user->isGuest) {
                \Yii::$app->session->setFlash('error', 'Чтобы добавить статью вам нужно быть зарегестрированным пользователем');
            }
        }

        //$needPost = Post::findOne();
      return $this->render('posts',compact('posts','pages', 'form'));


    }
    //Page of one post
    public function actionShow(){
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        return $this->render('show', compact('post', 'id','formEditPost'));
    }
    //Page of my posts
    public function actionAll(){
        $query = Post::find()->select('id, title, text');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();


        return $this->render('all', compact('posts','pages','formEditPost'));
    }
}