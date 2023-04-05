<?php

require_once("./models/course.php");
include('./shared/header.php');

$mode = $_GET['mode'] ?? 'grid';

$course = new Course();

$courses = $course->all();
?>




    <div class="row my-5">
        <div class="col-6">
            <h1>List of courses</h1>
        </div>
        <div class="col-6 text-end">
            <a class="btn btn-info" href="https://brightcoding.dev">Bright Coding</a>
        </div>
    </div>

    
    <div class="row my-3">
      <div class="col-6 mx-auto">
        <form action="confirmation.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
          <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
          <div class="form-group">
            <label for="image" class="form-label">Url</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
          <div class="form-group">
            <label for="price" class="form-label">Price</label>
          <input type="number" name="price" id="price" class="form-control">
        </div>
          <div class="grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
   

   
    <div class="row my-2">
      <div class="col-12 text-end">
        <a href="/pmp/home.php?mode=grid" class="btn btn-info">Grid</a>
        <a href="/pmp/home.php?mode=list" class="btn btn-warning">List</a>
      </div>
    </div>
   

    <?php if($mode == 'grid'): ?>
    <div class="row mb-5">

        <?php foreach($courses as $course): ?>
        <div class="col-4 text-center">

            <div class="card my-2">
                <img class="card-img-top" src="/pmp/<?php echo $course->image; ?>" alt="Title">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $course->title; ?></h4>
                    <p class="card-text"><?php echo $course->description; ?></p>
                    <div class="grid">
                        <button class="btn <?php echo $course->price > 20 ? 'btn-danger' : 'btn-success' ?>">Price is <?php echo $course->price; ?></button>
                        <a class="btn btn-danger" href="/pmp/delete.php?id=<?php echo $course->id ?>">Delete</a>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <?php endif ?>

    <?php if($mode == 'list'): ?>
    <div class="row">
      <div class="col-12">
        <ul class="list-group list-group-numbered">
          <?php foreach($courses as $course): ?>
          <li class="list-group-item active">
            <h4><?php echo $course->title ?></h4>
            <p><?php echo $course->description ?></p>
            <span class="badge bg-success"><?php echo $course->price ?></span>
            <a class="btn btn-danger" href="/delete.php?id=<?php echo $course->id ?>">Delete</a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div> 
    <?php endif ?>


    
  <?php include('./shared/footer.php') ?>