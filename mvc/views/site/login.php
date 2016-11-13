<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAssetWebSite;
use app\assets\AppAsset;
AppAsset::register($this);
AppAssetWebSite::register($this);
?>
<div class="site-login">

    <!--<div class="modal fade" id="myModal" role="dialog">-->

    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header" id="cabecera-modal" style="padding:35px 50px;">
                <button type="button" class="close" id="cruz-close" data-dismiss="modal">&times;</button>
                <img src="img/avatarUser.png" id="img-avatar-login" alt="Logo P&aacute;gina" align="top" />
            </div>
            <div class="modal-body" style="padding:20px 50px;">
                <h4>
                    <strong>
                        <p style="text-align: center">Ingrese su usario y contrase&ntilde;a</p>
                    </strong>
                </h4>
                <br />
                <br />

                <?php
                $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => ['class' => 'form-horizontal'],
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-2 control-label'],
                            ],
                ]);
                ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?=
                $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-4\">{input} {label}</div>\n<div class=\"col-lg-5\">{error}</div>", 'margin-left' => '50px'
                ])
                ?>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-success btn-block', 'name' => 'login-button', 'id' => 'btn-login-popup']) ?>
                    </div>
                    <br />
                    <br />



                    <!--<div id="imgEmail" align="center">
                        <br />
                        <h4>
                            <p>
                                <strong>Ingresa con tu cuenta de:</strong>
                            </p>
                        </h4>
                        <a href="https://gmail.com" target="_blank" style="display:inline-block; float:center">
                            <img src="img/Google-Logo-3.jpg" alt="www.gmail.com" style="width:30px;height:30px;" />
                        </a>
                        <a href="https://www.facebook.com/" target="_blank">
                            <img src="img/facebook_logo.jpg" alt="www.facebook.com" style="width:30px;height:30px;" />
                        </a>
                    </div>-->

                    <div id="imgEmail" align="center">
                        <br />
                        <h4>
                            <p>
                                <strong>&#191No est&aacute; registrado o quer&eacute;s que tu remiser&iacute;a aparezca?</strong>
                            </p>
                        </h4>
                        <br />
                        <br />
                        <a>
                            <?= Html::button('Registrarme como Usuario', ['class' => 'btn btn-primary', 'id' => 'btn-registrarme-user-login-popup']); ?>
                            <?= Html::button('Registrarme como Agencia', ['class' => 'btn btn-primary', 'id' => 'btn-registrarme-agencia-login-popup']); ?>
                        </a>
                    </div>





                </div>

                <?php ActiveForm::end(); ?>

            </div>
            <div class="modal-footer" id="pie-modal">
                <b>
                    <a id="link-olvidaste-contrasenia" href="#">&#191;Has olvidado la contrase&ntilde;a?</a>
                </b>
            </div>
        </div>
    </div>
</div>
<!--</div>-->