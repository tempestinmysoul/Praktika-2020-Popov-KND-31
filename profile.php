<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: /');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>
<body>
    <div class="container-fluid row-fix">
            <div class="col-lg-12 row-fix">
                <div class="header-row">
                    <div class="account-info">
                        <div class="account">
                            <div class="avatar">
                                <img src="<?= $_SESSION['user']['avatar'] ?>" width="40" alt="alt">
                            </div>
                            <div class="profile-info">
                                <p style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></p>
                            </div>
                            <div class="exit">
                                <a href="includes/logout.php" class="logout">Выход</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

            <main>
                <form id="form">
                <div class="container-fluid">
                    <!-- номер заказа и дата -->
                    <div class="row my-2">
                        <div id="order-number-order-date" class="mx-auto">
                            Заказ №
                            <input name="order-number-id" id="order-number-id" class="order-number-id" type="number">
                            от
                            <input name="order-data" id="order-data" type="date">
                        </div>
                    </div>
                    <hr>
                    <!-- менеджео и закажчик -->
                    <div class="row my-2">

                        <lable class="col-sm-2 control-lable">Менеджер</lable>

                        <div class="col-sm-4">
                            <input name="input-manager" id="input-manager" class="form-control" type="text" value="Менеджер Сергей">
                        </div>

                        <lable class="col-sm-1 control-lable">Заказчик</lable>

                        <div class="col-sm-4">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single input-customer-data" name="input-customer-data">
                                <option value="Option 1">первое</option>
                                <option value="Option 2">второе</option>
                                <option value="Option 3">тетье</option>
                                <option value="Option 4">четвертое</option>
                                <option value="Option 5">пятое</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <hr>
                    <!-- изделие и тераж -->
                    <div class="row my-2">
                        <lable class="col-sm-2 control-lable">Менеджер</lable>

                        <div class="col-sm-5">
                            <input name="input-manager-name" id="input-manager-name" class="product-control" type="text" value="Менеджер Сергей">
                        </div>

                        <lable class="col-sm-1 control-lable">Заказчик</lable>

                        <div class="col-sm-1">
                            <input name="input-customer-name" class="number-input-control input-customer-name" type="number" value="1000">
                        </div>
                    </div>
                    <!-- текстовое поле -->
                    <div class="row my-2">
                        <lable class="col-lg-2 control-lable">Спецефикация</lable>

                        <div class="col-sm-9">
                            <textarea name="inputSpecification" id="inputSpecification"  class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <hr>
                    <!-- заголовки -->
                    <div class="row my-2">
                        <div class="col-sm-2 text-right">Поставщик</div>
                        <div class="col-sm-3 text-center">Описание материала</div>
                        <div class="col-sm-1 text-center">Дата оплаты</div>
                        <div class="col-sm-1 text-center">Стоемость</div>
                        <div class="col-sm-1 text-center">Счет №</div>
                        <div class="col-sm-1 text-center">Дата счета</div>
                        <div class="col-sm-1 text-center">Форма</div>
                        <div class="col-sm-1 text-center">Оплачено</div>
                        <div class="col-sm-1 text-center">Долг</div>
                    </div>
                    <!-- выборка товаров бумага-->
                    <div class="row my-1">
                        <div class="col-md-1">
                            <div class="as-lable">Бумага</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-file-text-o"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- выборка печать-->
                    <div class="row my-2">
                        <div class="col-md-1">
                            <div class="as-lable">Печать</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-file-text-o"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- выборка постпечать 1-->
                    <div class="row my-2">
                        <div class="col-md-1">
                            <div class="as-lable">Постпечать 1</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                        <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- выборка постпечать 2-->
                    <div class="row my-2">
                        <div class="col-md-1">
                            <div class="as-lable">Постпечать 2</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- выборка постпечать 3-->
                    <div class="row my-2">
                        <div class="col-md-1">
                            <div class="as-lable">Постпечать 3</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- выборка доставка-->
                    <div class="row my-2">
                        <div class="col-md-1">
                            <div class="as-lable">Доставка</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" value="Менеджер Сергей">
                            <select class="js-example-basic-single" name="state">
                                <option value="Option 1">Op1</option>
                                <option value="Option 2">Op2</option>
                                <option value="Option 3">Op3</option>
                                <option value="Option 4">Op4</option>
                                <option value="Option 5">Op5</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                        </div>

                        <div class="input-group col-sm-1">
                            <input class="form-control" type="number" placeholder="...">
                            <div class="input-group-addon">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="date">
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-basic-single" name="state">
                                <option value="b/n">Б/н</option>
                                <option value="Nal">Нал</option>
                                <option value="Card">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- ручные операции -->
                    <div class="row my-4">
                        <div class="col-md-2">
                            <div class="as-lable">Ручные операции</div>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholde="...">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number">
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control control-manual-operation-bills" type="number">
                            <div>
                            <span>
                                <i class="fa" aria-hidder="true"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <!-- возврат -->
                    <div class="row my-4">
                        <div class="col-md-5">
                            <div class="as-lable">Возврат</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control pull-right datepicker" type="date">
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number">
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control control-manual-operation-bills" type="number">
                            <div>
                            <span>
                                <i class="fa" aria-hidder="true"></i>
                            </span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text" >
                            <select class="js-example-disabled-results select-control" disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control " disabled="disabled">
                                <option value="SmartPrint1">...</option>
                                <option value="SmartPrint2">...</option>
                                <option value="SmartPrint3">...</option>
                            </select>
                        </span>
                        </div>
                    </div>
                    <hr>
                    <!-- финальная сумма -->
                    <div class="row my-2 sum-block-control">
                        <div class="col-sm-1">
                            <div class="as-lable">Сумма заказа</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number">
                        </div>

                        <div class="col-sm-1">
                            <div class="as-lable">Форма оплаты</div>
                        </div>

                        <div class="col-sm-1">
                        <span id="input-customer" class="form-control" type="text">
                            <select class="js-example-disabled-results select-control">
                                <option value="SmartPrint1">Б/н</option>
                                <option value="SmartPrint2">Нал.</option>
                                <option value="SmartPrint3">Карта</option>
                            </select>
                        </span>
                        </div>

                        <div class="col-sm-1">
                            <div class="as-lable">Дата оплаты</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number">
                        </div>

                        <div class="col-sm-1">
                            <div class="as-lable">Счет закажчику</div>
                        </div>

                        <div class="col-sm-2">
                            <input class="form-control" type="number">
                        </div>
                    </div>
                    <!-- возврат затрат -->
                    <div class="row my-2 sum-block-control">
                        <div class="col-sm-1">
                            <div class="as-lable">Всего затрат</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" disabled="disabled">
                        </div>

                        <div class="col-sm-1">
                            <div class="as-lable">Прибыль</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" disabled="disabled">
                        </div>

                        <div class="col-sm-2">
                            <div class="as-lable">Рентабельность,%</div>
                        </div>

                        <div class="col-sm-1">
                            <input class="form-control" type="number" disabled="disabled">
                        </div>
                    </div>
                    <!-- кнопки отмена/принять  -->
                    <div class="row botton-control">
                        <div class="col-sm-2 botton-control">
                            <button class="btn btn-repeal">Отмена</button>
                            <button class="btn btn-accept">Принять</button>
                        </div>

                    </div>
                </div>
                </form>
            </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/submit.js"></script>
</body>
</html>