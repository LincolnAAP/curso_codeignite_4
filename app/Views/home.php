<?= $this->extend('master') ?>

<?= $this->section('content') ?>


<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider _bannerHomme">
</section><!-- End Hero Slider Section -->

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts _recent"> 
</section> <!-- End Post Grid Section -->

<!-- ======= Culture Category Section ======= -->
<section class="category-section _category_culture">
    <include-fragment src="/category/culture">
        <?php echo $this->include('_placeholders/_category')?>
    </include-fragment>  
</section><!-- End Culture Category Section -->

<!-- ======= Business Category Section ======= -->
<section class="category-section _category_business"> 
<include-fragment src="/category/business">
        <?php echo $this->include('_placeholders/_category')?>
    </include-fragment> 
</section><!-- End Business Category Section -->

<!-- ======= Lifestyle Category Section ======= -->
<section class="category-section _category_lifeStyle"> 
<include-fragment src="/category/lifeStyle">
        <?php echo $this->include('_placeholders/_category')?>
    </include-fragment>
</section><!-- End Lifestyle Category Section -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="module">
import '/assets/js/loadHommeData.js'
</script>
<?= $this->endSection() ?>