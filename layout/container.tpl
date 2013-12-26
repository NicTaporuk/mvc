<div class="container">
{*-----------------Тут происходит работа c продукцией-----------------*}
<div class="alltable">
    <div class="groupProduct">
        <h3>Группы товаров</h3>
        <div class="namegroup"></div>
        <div class="directory">
                {if isset($data)}
                    {$data}
                {/if}
        </div>
    </div>
    <div class="filterProduct">
        <h3>Товары</h3>

        <form  action="produktgroups/xhrSearch" method="post" id="searchProduct">
            <fieldset>
                <legend>Фильтр</legend>
                <div class="name-products">
                    <label class="l-name" for="name-product">Название :</label>
                    <input class="name-product"type="text"/>
                </div>
                <div class="price">
                    <label class="l-price" for="">Цена :</label>
                    <label class="s">c</label>
                    <input class="s-price" type="text" name="" id=""/><label class="po" for="">по</label>
                    <input class="po-price" type="text" name="" id=""/>
                </div>
                <input class="filter" type="submit" value="Фильтр"/>
                <button class="cleaner">Очистить</button>

        </fieldset>
        </form>



        <div class="insert-record">
            <input type="submit" value="Вставить" class="insert"/>
        </div>
        <div class="tableForGroup"></div>
    </div>

</div>

</div> <!-- /container -->
<!-- всплывающее окно -->
<div class="productWindow">
{*<a href="javascript:">Модальное окно</a>*}
	<div class="modal_bg"></div>
    <div class="modal_window">
        <div class="close">X</div>

        <div class="button">
            <button>rehgerhg</button>
        </div>
 </div>
 </div>
 <!-- всплывающее окно для удаления продукта-->
    <div class="modal_window_del">
        <input class="hid" type="hidden" value=""/>
        <div class="success">
            Запрос выполнен успешно
        </div>
        <div class="close">X</div>
        <div class="close-text">
        Вы действителльно хотите удалить запись
        </div>
            <div class="yes">
            <input type="submit" value="Да"/>
        </div>
        <div class="no">
            <button>Нет</button>
        </div>
    </div>
    <!-- всплывающее окно для обновления продукта-->
    <div class="modal_window_update">
        <input class="hid" type="hidden" value=""/>
        <div class="close">X</div>
        <div class="success">
            Запрос выполнен успешно
        </div>
        <div class="nm-group">
        <label class="l-namegroup" for="">Группа товаров :</label><label class="name-group-lab" for=""></label>
        </div>
        <div class="l-name-product">
            <label for="">Название товара :</label>
        </div>
        <div class="nm-product">
        <textarea class="name_group" type="text" name="" id="" /></textarea>
        </div>
        <div class="l-price-product">
            <label for="">Цена товара :</label>
        </div>
        <div class="pr-div">
        <input class="price_product" type="text" name="" id="" />
        </div>
        <div class="yes-update">
            <input type="submit" value="Да"/>
        </div>
        <div class="no">
            <button>Нет</button>
        </div>
    </div>
    <!-- всплывающее окно вставить запись продукта-->
    <div class="modal_window_insert">
        <input class="hid_directory" type="hidden" value=""/>
        <div class="close">X</div>
        <div class="success">
            Запрос выполнен успешно
        </div>
        <div class="nm-group-insert">
            <label class="l-namegroup-ins" for="">Выберите директорию в которую заносим запись :</label>
            <select name="select-ins" class="select-ins"></select>
        </div>

        <div class="l-name-directory">
            <label for="">Название директории :</label><label class="name-directory"></label>
        </div>
        <label class="l-name-record">Название товара :</label>
        <div class="name-record">
            <textarea class="record" type="text" name="" id="" /></textarea>
        </div>
        <div class="l-price-product-record">
            <label for="">Цена товара :</label>
        </div>
        <div class="pr-div-record">
            <input class="price_record_product" type="text" name="" id="" />
        </div>
        <div class="yes-insert">
            <input type="submit" value="Да"/>
        </div>
        <div class="no">
            <button>Нет</button>
        </div>
    </div>
    <!-- всплывающее окно для удаления каталога-->
<div class="modal_window_dir_del">
    <input class="dir_hid" type="hidden" value=""/>
    <div class="success">
        Запрос выполнен успешно
    </div>
    <div class="close">X</div>
    <div class="close-text">
        Вы действителльно хотите удалить эту группу товыров
    </div>
    <div class="yes-directory">
        <input type="submit" value="Да"/>
    </div>
    <div class="no">
        <button>Нет</button>
    </div>
</div>
    <!-- всплывающее окно для обновления каталога-->
    <div class="modal_window_dir_upd">
        <input class="upd_dir_hid" type="hidden" value=""/>
        <div class="close">X</div>
        <div class="success">
            Запрос выполнен успешно
        </div>
        <div class="nm-group">
            <label class="l-namegroup" for="">Принадлежит :</label><label class="name-group-lab" for=""></label>
        </div>
        <div class="l-name-product">
            <label for="">Название :</label>
        </div>
        <div class="nm-product">
            <textarea class="name_dir" type="text" name="" id="" /></textarea>
        </div>

        <div class="yes-update-dir">
            <input type="submit" value="Да"/>
        </div>
        <div class="no">
            <button>Нет</button>
        </div>
    </div>
    <!-- всплывающее окно для вставки каталога-->
    <div class="modal_window_dir_ins">
        <input class="hid_dir_insert" type="hidden" value=""/>
        <div class="close">X</div>
        <div class="success-dir">
            Запрос выполнен успешно
        </div>

        <div class="l-name-directory">
            <label for="">Принадлежит :</label><label class="name-ins-directory"></label>
        </div>
        <label class="l-name-record">Название группы :</label>
        <div class="name-record">
            <textarea class="record-ins" type="text" name="" id="" /></textarea>
        </div>

        <div class="yes-insert-dir">
            <input type="submit" value="Да"/>
        </div>
        <div class="no">
            <button>Нет</button>
        </div>
    </div>
