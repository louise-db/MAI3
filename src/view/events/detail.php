<section class="detailPage" id="content">
  <div class="breadcrumbs">
    <p>
      <a href="index.php">Home</a> > <a href="index.php?page=agenda">Agenda</a>
    </p>
  </div>

  <section class="detInfo">

    <section class="detInfoTop">
      <div class="detInfoImg">
        <img src="assets/img/evenement_detail.jpg"/>
        <div class="detInfoImgBg"></div>
      </div>

      <section class="detAlgInfo">
        <header><h2><?php echo $event['title']; ?></h2></header>
        <dl>

          <!-- <dd class="location">
            <ul><?php foreach($event['locations'] as $location): ?>
              <li>
                <?php echo $location['name'];?>
              </li>
            <?php endforeach;?></ul>
          </dd> -->

          <dd class="time"><?php echo $event['start'];?></dd>

          <!-- <dd class="tags">
            <ul><?php foreach($event['tags'] as $tag): ?>
              <li>#<?php echo $tag['tag'];?></li>
            <?php endforeach;?></ul>
          </dd> -->

        </dl>
      </section>

    </section>

    <p><?php echo $event['description'];?></p>
  </section>

  <section class="detOther">
      <h5>Bekijk andere evenement streams</h5>
      <section class="detOtherFlex">
        <div class="detEvenement">
          <p class="detOtherTitle"><span>17/06</span> - Dok DJ CosyCozy</p>
          <img src="assets/img/evenement1.jpg" alt="evenement1" class="evenement" />
        </div>

        <div class="detEvenement">
          <p class="detOtherTitle"><span>17/06</span> - Les Frères troubouch</p>
          <img src="assets/img/evenement2.jpg" alt="evenement2" class="evenement" />
        </div>

        <div class="detEvenement">
          <p class="detOtherTitle"><span>16/06</span> - Dok Moestuin</p>
          <img src="assets/img/evenement3.jpg" alt="evenement3" class="evenement" />
        </div>
      </section>
  </section>
  <button onclick="history.go(-1);">Terug naar agenda</button>
</section>
