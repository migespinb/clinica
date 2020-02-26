<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->

        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Consulta', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard text-blue', 'url' => ['/site/index']],
                    ['label' => 'Atención', 'icon' => 'stethoscope text-aqua', 'url' => ['/atiende/index']],
                    ['label' => 'Pacientes', 'icon' => 'user text-green', 'url' => ['/paciente/index']],
                    ['label' => 'Citas', 'icon' => 'calendar-check-o text-yellow', 'url' => ['/cita/index']],
                    ['label' => 'Mails', 'icon' => 'envelope text-red', 'url' => ['/mail/index']],
                    // 
                    ['label' => 'Mi Clínica', 'options' => ['class' => 'header']],
                    //
                    ['label' => 'Servicios', 'icon' => 'user-md', 'url' => ['/servicio/index']],
                    ['label' => 'Convenios', 'icon' => 'handshake-o', 'url' => ['/convenio/index']],
                    ['label' => 'Medios de pago', 'icon' => 'credit-card', 'url' => ['/medio-pago/index']],
                    // ['label' => 'Medios de pago', 'icon' => 'credit-card', 'url' => ['/gii']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    // 
                    ['label' => 'Acceso', 'options' => ['class' => 'header'], 'visible'=>Yii::$app->user->identity->role==='Admin'? true:false],
                    ['label' => 'Registrar', 'icon' => 'user-plus text-aqua', 'url' => ['/site/register'],
                    'visible'=>Yii::$app->user->identity->role==='Admin'? true:false],
                    ['label' => 'Adm. usuarios', 'icon' => 'users text-gray', 'url' => ['/usuario/index'],
                    'visible'=>Yii::$app->user->identity->role==='Admin'? true:false],
                ],
            ]
        ) ?>

    </section>

</aside>
