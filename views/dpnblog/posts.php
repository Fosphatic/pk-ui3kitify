<?= $view->script('dpnblog-posts' , 'dpnblog:app/bundle/dpnblog-posts.js' , 'vue') ?>
<div id="posts" class="uk-grid uk-grid-match uk-child-width-1-2@m" uk-grid uk-height-match="target: .uk-card" uk-scrollspy="target: .uk-card; cls:uk-animation-slide-bottom-medium; delay: 500">

    <?php foreach ($posts as $post): ?>

    <div>
<article>

    <div class="uk-card uk-card-default uk-box-shadow-hover-large uk-box-shadow-bottom uk-margin-large-bottom">
            <div class="uk-card-media-top uk-cover-container">


            <?php if ($post->isPostStyle() == 'Default Post' && !empty($post->data['image']['src'])): ?>
                <img class="dpnblog-height" src="<?= $post->data['image']['src'] ?>" alt="<?= $post->data['image']['alt'] ?>">
            <?php endif; ?>
            <?php if ($post->isPostStyle() == 'Video Content' && !empty($post->data['video']['image'])): ?>
                <img class="dpnblog-height" src="<?= $post->data['video']['image'] ?>" alt="<?= $post->category->title ?>">
            <?php endif; ?>
            <?php if ($post->isPostStyle() == 'Article Post' && !empty($post->data['image']['src'])): ?>
                <img class="dpnblog-height" src="<?= $post->data['image']['src'] ?>" alt="<?= $post->data['image']['alt'] ?>">
            <?php endif; ?>
            <?php if ($post->isPostStyle() == 'Image Gallery' && !empty($post->data['gallery'][0]['image'])): ?>
                <img class="dpnblog-height" src="<?= $post->data['gallery'][0]['image'] ?>" alt="<?= $post->category->title ?>">
            <?php endif; ?>
            <?php if ($post->isPostStyle() == 'Document' && !empty($post->data['image']['src'])): ?>
                <img class="dpnblog-height" src="<?= $post->data['image']['src'] ?>" alt="<?= $post->data['image']['alt'] ?>">
            <?php endif; ?>
            </div>

            <div class="uk-card-body">

                        <?php if ($authorBox === true): ?>
                                <div class="uk-flex uk-flex-center uk-margin-small-bottom">
                                    <div class="uk-text-center">
                                        <div class="dpnblog-avatar">
                                            <img src="<?= $post->getGravatar() ?>"/>

                                            <?php if ( $post->isPostStyle() == 'Default Post'): ?>
                                                <span class="uk-icon-file"></span>
                                            <?php endif; ?>

                                            <?php if ( $post->isPostStyle() == 'Video Content'): ?>
                                                <span class="uk-icon-youtube-play"></span>
                                            <?php endif; ?>

                                            <?php if ( $post->isPostStyle() == 'Article Post'): ?>
                                                <span class="uk-icon-list-alt"></span>
                                            <?php endif; ?>

                                            <?php if ( $post->isPostStyle() == 'Image Gallery'): ?>
                                                <span class="uk-icon-image"></span>
                                            <?php endif; ?>

                                            <?php if ( $post->isPostStyle() == 'Document'): ?>
                                                <span class="uk-icon-mortar-board"></span>
                                            <?php endif; ?>

                                        </div>
                                        <h6 class="uk-margin-remove"><?= $post->user->username ?></h6>
                                        <p class="uk-text-small uk-margin-remove"><?= $post->user->email ?></p>
                                    </div>
                                  </div>
                            <?php endif; ?>


                            <div class="uk-article-meta">
                              <?= __('Posted in') ?>
                              <a class="uk-text-bold" href="<?= $view->url('@dpnblog/category/id', ['id' => $post->category_id]) ?>"><?= $post->category->title ?></a>
                              <?= __('%date%', ['%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
                            </div>


                <main class="uk-width-1-1">
                <div class="uk-margin-small-top">
                    <h3 class="uk-h1 uk-margin-remove">
                        <a class="uk-link-reset" href="<?= $view->url('@dpnblog/id', ['id' => $post->id]) ?>"><?= $post->title ?></a>
                    </h3>

                    <div class="uk-margin-small-top">
                        <?= !empty($post->excerpt) ? $post->excerpt:$post->content ?>
                    </div>

                </div>

                <div class="uk-text-center uk-padding">
                <a class="uk-button uk-button-primary" href="<?= $view->url('@dpnblog/id', ['id' => $post->id]) ?>"><?= __('continue reading') ?></a>
                </div>
              </main>
          </div>
        </div>


      </article>

      </div>
    <?php endforeach; ?>

</div>

    <?php
    $range     = 3;
    $total     = intval($total);
    $page      = intval($page);
    $pageIndex = $page - 1;
    ?>

    <?php if ($total > 1) : ?>
        <ul class="uk-pagination uk-flex-center uk-margin-small-top">

            <?php for($i=1;$i<=$total;$i++): ?>
                <?php if ($i <= ($pageIndex+$range) && $i >= ($pageIndex-$range)): ?>

                    <?php if ($i == $page): ?>
                    <li class="uk-active uk-text-primary"><span><?=$i?></span></li>
                    <?php else: ?>
                    <li>
                        <a href="<?= $view->url('@dpnblog/page', ['page' => $i]) ?>"><?=$i?></a>
                    </li>
                    <?php endif; ?>

                <?php elseif($i==1): ?>

                    <li>
                        <a href="<?= $view->url('@dpnblog/page', ['page' => 1]) ?>">1</a>
                    </li>
                    <li><span>...</span></li>

                <?php elseif($i==$total): ?>

                    <li><span>...</span></li>
                    <li>
                        <a href="<?= $view->url('@dpnblog/page', ['page' => $total]) ?>"><?=$total?></a>
                    </li>

                <?php endif; ?>
            <?php endfor; ?>

        </ul>
    <?php endif ?>
