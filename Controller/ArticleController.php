<?php

require_once('Model/ArticleModel.php');
require_once('Vue/ArticleVue.php');



class ArticleController {
   
    public function show_articles_controller(){
        //recupere
        $articleModel = new articleModel();
        $articles = $articleModel->getArticles();
        
       
        $articleVue = new ArticleVue();
        $articleVue->affiche($articles);
    }


    public function show_article_controller($articles){
        //recupere
        $articleVue = new ArticleVue();
        $articleVue->affiche($articles);
    }
    
    public function show_addArticle_controller(){
       
        $articleVue = new ArticleVue();
        $articleVue->show_addArticle_view();
    }
       
    public function addArticle_controller(){
        $articleModel = new articleModel();
        $articles = $articleModel->addArticle_Model();
        header('location: admin');

       
    }
    public function showArticleDetail_controller(){

        $id = $_POST["idArticle"];
        
        $articleModel = new articleModel();
        $article = $articleModel->getArticle_Model($id);
        
       $articleVue = new ArticleVue();
       $articleVue->showArticleDetail_view($article);
       
    }

    
}

?>