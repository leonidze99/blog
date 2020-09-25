<?php

use yii\helpers\Url;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id])?>"><?= $article->category->title?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><?= $article->title?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content?>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->author->name?> On <?= $article->getDate();?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <?php if(!empty($comments)):?>

                    <?php foreach ($comments as $comment):?>
                        <div class="bottom-comment"><!--bottom comment-->

                    <div class="comment-img">
                        <img width="50" src="<?= $comment->user->image; ?>" alt="">
                    </div>

                    <div class="comment-text">
                        <a href="#" class="replay btn pull-right"> Replay</a>
                        <h5><?= $comment->user->name;?></h5>

                        <p class="comment-date">
                            <?= $comment->getDate();?>
                        </p>


                        <p class="para"><?= $comment->text; ?></p>
                    </div>
                </div>
                    <?php endforeach;?>

                <?php endif;?>
                <!-- end bottom comment-->


                <div class="leave-comment"><!--leave comment-->
                    <h4>Комментарий</h4>
<?php if(Yii::$app->session->getFlash('comment')):?>
    <div class="alert alert-success" role="alert">
        <?= Yii::$app->session->getFlash('comment'); ?>
    </div>
<?php endif;?>

<?php $form = \yii\widgets\ActiveForm::begin([
        'action'=>['site/comment', 'id'=>$article->id],
        'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                        <div class="form-group">
                            <div class="col-md-12">
<?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Напишите сообщение'])->label(false)?>


                            </div>
                        </div>
                    <button type="submit" class="btn send-btn">Оставить комментарий</button>
                    <?php \yii\widgets\ActiveForm::end();?>
                </div><!--end leave comment-->

            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);?>
        </div>
    </div>
</div>
<!-- end main content-->
