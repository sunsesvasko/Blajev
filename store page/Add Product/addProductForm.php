<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BlajevStyle/store page/Add Product/addProductForm.css">
</head>

<body>
    <div class="addProduct__container">
        <form action="/BlajevStyle/store page/Add Product/addProductLogic.php" method="post">
            <input name="productName" type="text" placeholder="Име на продукт" required>
            <input name="productPrice" type="text" placeholder="Цена" required>
            <select name="category" id="" required>
                <option value="male">Мъже</option>
                <option value="female">Жени</option>
                <option value="accessories">Аксесоари</option>
            </select>

            <?php
            session_start();
            if (isset($_SESSION['accessories'])) {
                if ($_SESSION['accessories'] == 0) {
                    echo '<div id="list1" class="dropdown-check-list" tabindex="100">
                  <span class="anchor">Размери</span>
                  <ul class="items" required>
                      <li><input name="size1" type="checkbox" />XS </li>
                      <li><input name="size2" type="checkbox" />S</li>
                      <li><input name="size3" type="checkbox" />M </li>
                      <li><input name="size4" type="checkbox" />L </li>
                      <li><input name="size5" type="checkbox" />XL </li>
                      <li><input name="size6" type="checkbox" />XXL </li>
                  </ul>
              </div>';
                    echo "<script>
        var checkList1 = document.getElementById('list1');
        checkList1.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList1.classList.contains('visible'))
                checkList1.classList.remove('visible');
            else
                checkList1.classList.add('visible');
        }
               </script>";
                }
            }
            ?>

            <div id="list2" class="dropdown-check-list" tabindex="100">
                <span class="anchor">Цветове</span>
                <ul class="items" required>
                    <li><input name="color1" type="checkbox" />Черно </li>
                    <li><input name="color2" type="checkbox" />Червено</li>
                    <li><input name="color3" type="checkbox" />Бяло </li>
                    <li><input name="color4" type="checkbox" />Зелено </li>
                    <li><input name="color5" type="checkbox" />Синьо </li>
                    <li><input name="color6" type="checkbox" />Жълто </li>
                </ul>
            </div>

            <input type="url" name="mainImage" id="" placeholder="Главна снимка" required>
            <input type="url" name="galeryImage[]" id="" placeholder="Снимка за галерия" required>
            <button type="button" class="addPhotos" onclick="addInput()">+</button>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function addInput() {
            var newInput = document.createElement('input');
            newInput.type = 'url';
            newInput.name = 'galeryImage[]';
            newInput.id = '';
            newInput.placeholder = 'Снимка за галерия';
            newInput.required = true;
            var addButton = document.querySelector('.addPhotos');
            addButton.parentNode.insertBefore(newInput, addButton);
        }
    </script>

    <script>
        var checkList2 = document.getElementById('list2');
        checkList2.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList2.classList.contains('visible'))
                checkList2.classList.remove('visible');
            else
                checkList2.classList.add('visible');
        }
    </script>
</body>

</html>