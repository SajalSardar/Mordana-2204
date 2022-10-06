<?php 
require_once "../inc/header.php";
?>

<div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-end">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Add Service</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Add Service</h1>
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
                    <form method="POST" action="serviceinsert.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title:</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea name="description"   class="form-control" rows="10" ></textarea>
                        </div>
                        <div class="form-group">
                            <label >Link:</label>
                            <input type="text" name="url" class="form-control" placeholder="Link">
                        </div>
                        <div class="form-group">
                            <label >Box Style:</label>
                            <select name="icon_box" class="form-control">
                                <option disabled selected>Select Box Style</option>
                                <option value="icon-box-pink">Box Pink</option>
                                <option value="icon-box-cyan">Box Cyan</option>
                                <option value="icon-box-green">Box Green</option>
                                <option value="icon-box-blue">Box Blue</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Icon:</label>
                            <input type="text" name="icon" class="form-control" placeholder="Ex: bxl-dribbble">
                            <p>Enter <a href="https://boxicons.com/" target="_blank">Box Icon</a>  Class Name</p>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        </div>

<?php 
require_once "../inc/footer.php";
?>