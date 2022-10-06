<?php 
require_once "../inc/header.php";
require_once '../../db.php';
$query = "SELECT * FROM why_us";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)> 0){
    $data = mysqli_fetch_assoc($result);
}
?>

<div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-end">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Update WhyUs</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Update WhyUs</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Default Forms</strong></p>
                    <p class="text-muted">FlowDash supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form method="POST" action="updatewhyus.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Photo:</label>
                            <input type="file" name="file" class="form-control mb-3">
                            <img src="../../uploads/whyus/<?=$data['photo']?>" alt="" width="100">
                        </div>
                        <div class="form-group">
                            <label>Video Link:</label>
                            <input type="text" name="video_link" value="<?=$data['video_link']?>" class="form-control" placeholder="Video Link">
                        </div>

                        <div class="form-group">
                            <label >Title One:</label>
                            <input type="text" name="title_1" value="<?=$data['title_1']?>" class="form-control" placeholder="Title One">
                        </div>
                        <div class="form-group">
                            <label> Description One:</label>
                            <textarea name="description_1"   class="form-control" rows="5" ><?= $data['description_1']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Icon  One:</label>
                            <input type="text" name="icon_1" class="form-control"  value="<?=$data['icon_1']?>" placeholder="Icon One">
                        </div>

                        <div class="form-group">
                            <label >Title Two:</label>
                            <input type="text" name="title_2" class="form-control"  value="<?=$data['title_2']?>" placeholder="Title Two">
                        </div>
                        <div class="form-group">
                            <label> Description Two:</label>
                            <textarea name="description_2"   class="form-control" rows="5" ><?= $data['description_2']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Icon  Two:</label>
                            <input type="text" name="icon_2" class="form-control"  value="<?=$data['icon_2']?>" placeholder="Icon Two">
                        </div>
                        
                        
                        
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>

        </div>

<?php 
require_once "../inc/footer.php";
?>