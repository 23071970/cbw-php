 <footer class="bg-light text-center p-3 mt-auto">
     <p>© 2026</p>
 </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


 <?php
    $scripts = $meta[$site]['script'] ?? [];
    if (is_array($scripts)) {
        foreach ($scripts as $script) {
            echo "<script src='" . JS_URL . "/$script'></script>";
        }
    }
    ?>
 </body>

 </html>