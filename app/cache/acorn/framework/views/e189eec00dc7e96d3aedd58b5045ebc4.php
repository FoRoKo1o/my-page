<footer class="bg-gray-800 text-white py-12">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <div>
      <h3 class="font-bold mb-4">Menu</h3>
      <?php echo wp_nav_menu([
          'theme_location' => 'footer_menu',
          'menu_class' => 'flex flex-col gap-2',
          'container' => false,
          'echo' => false,
      ]); ?>

    </div>
    <div>
      <h3 class="font-bold mb-4">Kontakt</h3>
      <p>Email: qqqq@qqqqq.qqq</p>
      <p>Telefon: 000 000 000</p>
      <p>Adres: qqqqqqqqqqqq qqqqqqqqqqqqq</p>
    </div>
    <div>
      <h3 class="font-bold mb-4">Social</h3>
      <div class="flex gap-4">
        <a href="#" class="hover:text-green-400">qqqqqqqqqqqq</a>
        <a href="#" class="hover:text-green-400">wwwwwwwwwwww</a>
        <a href="#" class="hover:text-green-400">eeeeeeeeeee</a>
      </div>
    </div>

  </div>
</footer>
<?php /**PATH /home/toor/projekty/szablon/my-page/web/app/themes/my-theme/resources/views/sections/footer.blade.php ENDPATH**/ ?>