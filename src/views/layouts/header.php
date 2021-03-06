<?php
/**
 * @author  Zoltan Szanto <mrbig00@gmail.com>
 * @since   2018/07/22
 *
 * @var $this    \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;

?>
<header class="main-header">
    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <?= \rmrevin\yii\fontawesome\FAS::i(\rmrevin\yii\fontawesome\FAS::_BARS) ?>
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php if (!\Yii::$app->user->isGuest): ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= \Yii::$app->user->identity->profile->getAvatarUrl() ?>" class="user-image"
                                 alt="User Image"/>
                            <span class="hidden-xs"><?= \Yii::$app->user->identity->profile->name; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?= \Yii::$app->user->identity->profile->getAvatarUrl() ?>" class="img-circle"
                                     alt="User Image"/>
                                <p>
                                    <?= \Yii::$app->user->identity->profile->name; ?>
                                    <small>
                                        <?=
                                        \Yii::t(
                                            'app',
                                            'Member since {date}',
                                            ['date' => \Yii::$app->formatter->asDate(\Yii::$app->user->identity->created_at)]
                                        )
                                        ?>
                                    </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <?= Html::a(
                                        'Profile',
                                        ['/user/settings'],
                                        ['class' => 'btn bg-green']
                                    ) ?>
                                </div>
                                <div class="pull-right">
                                    <?= Html::a(
                                        'Sign out',
                                        ['/user/logout'],
                                        ['data-method' => 'post', 'class' => 'btn bg-red']
                                    ) ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
