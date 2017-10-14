<?php



move_uploaded_file($_FILES['pic']['tmp_name'], sprintf('./uploads/%s.%s', sha1_file($_FILES['upfile']['tmp_name'])));
