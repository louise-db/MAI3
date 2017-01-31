<section>
  <div class="breadcrumbs">
    <p>
      <a href="index.php">Home</a> > <a href="index.php?page=agenda">Agenda</a>
    </p>
  </div>

  <section class="DetInfo">

    <section class="DetInfoTop">
      <img />

      <section class="DetAlgInfo">
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

  <section class="DetOther">
    <section class="LsOther">
      <p><span>Bekijk andere evenement streams</span></p>
      <section class="LsOtherFlex">
        <div class="LsEvenement">
          <img src="assets/img/evenement1.jpg" alt="evenement1" class="evenement" />
          <p class="LsOtherTitle"><span>17/06</span> - Dok DJ CosyCozy</p>
          <p class="duration">18:04</p>
        </div>

        <div class="LsEvenement">
          <img src="assets/img/evenement2.jpg" alt="evenement2" class="evenement" />
          <p class="LsOtherTitle"><span>17/06</span> - Les Frères troubouch</p>
          <p class="duration">23:40</p>
        </div>

        <div class="LsEvenement">
          <img src="assets/img/evenement3.jpg" alt="evenement3" class="evenement" />
          <p class="LsOtherTitle"><span>16/06</span> - Dok Moestuin</p>
          <p class="duration">16:57</p>
        </div>
      </section>
    </section>
  </section>


  <header><h1><?php echo $event['title']; ?></h1></header>
  <button onclick="history.go(-1);">Terug naar agenda</button>
</section>
