<?php
include 'parts/auth.php';
include 'parts/header.php';
include 'lib/db.php';
?>

<?php
if (isset($_POST['form_submit'])) {

    $name = $_POST['name'];
    $father = $_POST['father_name'];
    $mother = $_POST['mother_name'];
    $present_address = $_POST['present_address'];
    $premanent_address = $_POST['premanent_address'];
    $dob = $_POST['dob'];
    $phone_number = $_POST['phone_number'];
    $school_name = $_POST['school_name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $blood = $_POST['blood'];


    $sql = "INSERT INTO member (name, father_name, mother_name, present_address,
     premanent_address, dob, phone_number, school_name, class, roll, religion, nationality, blood)
     VALUES ('$name', '$father', '$mother' ,'$present_address' ,'$premanent_address' ,
     '$dob' ,'$phone_number' , '$school_name' , '$class' , '$roll' , '$religion' , '$nationality' , '$blood')";

    $status = $db->query($sql);

    if ($status) {
        echo '<div class="container p-4 text-center">
                    <div class="alert alert-primary" role="alert">
                       <h5> Data submited successfully.</h5>
                    </div>
                </div>';
    } else {
        echo '<div class="container p-4 text-center">
                    <div class="alert alert-danger" role="alert">
                       <h5> Data submited failed.</h5>
                    </div>
                </div>';
    }

}
?>
<section class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h3> + Add Product
                    <a href="index.php" class="btn btn-primary bg-opacity-10 btn-sm float-end">
                        Home
                    </a>
                </h3>
                <hr>
                <form action="add-member.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Type your name">
                    </div>

                    <div class="mb-3">
                        <label for="father" class="form-label">Father's Name</label>
                        <input name="father_name" type="text" class="form-control" id="father"
                            placeholder="Type your father's name">
                    </div>

                    <div class="mb-3">
                        <label for="mother" class="form-label">Mother's Name</label>
                        <input name="mother_name" type="text" class="form-control" id="mother"
                            placeholder="Type your mother's name">
                    </div>

                    <div class="mb-3">
                        <label for="present_address" class="form-label">Present Address</label>
                        <input name="present_address" type="text" class="form-control" id="present_address"
                            placeholder="Type your present address">
                    </div>

                    <div class="mb-3">
                        <label for="premanent_address" class="form-label">Permanent Address</label>
                        <input name="premanent_address" type="text" class="form-control" id="premanent_address"
                            placeholder="Type your premanent address">
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input name="dob" type="date" class="form-control" id="dob"
                            placeholder="Type your premanent address">
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input name="phone_number" type="text" class="form-control" id="phone_number"
                            placeholder=" Phone number">
                    </div>

                    <div class="mb-3">
                        <label for="school_name" class="form-label">School Name</label>
                        <input name="school_name" type="text" class="form-control" id="school_name"
                            placeholder="Type your school name">
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input name="class" type="number" class="form-control" id="class">
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="roll" class="form-label">Roll</label>
                            <input name="roll" type="number" class="form-control" id="roll">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="religion" class="form-label">Religoin</label>
                            <select id="religion" name="religion" class="form-control">
                                <option value="">--selection--</option>
                                <option value="muslim">Muslim</option>
                                <option value="hindu">Hindu</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <select id="nationality" name="nationality" class="form-control">
                                <option value="">--selection--</option>
                                <option value="bangladeshi">Bangladeshi</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="blood" class="form-label">Blood Group</label>
                                <select name="blood" id="blood" class="form-control">
                                    <option value="">--Blood Group--</option>
                                    <option>A(+ve)</option>
                                    <option>A(-ve)</option>
                                    <option>B(+ve)</option>
                                    <option>B(-ve)</option>
                                    <option>AB(+ve)</option>
                                    <option>AB(-ve)</option>
                                    <option>O(+ve)</option>
                                    <option>O(-ve)</option>
                                    <option>Unknown</option>
                                </select>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="formFileMultiple" class="form-label">File uplode</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>


                    <div class="md-3">
                        <input type="submit" value="Submit" class="btn btn-primary" name="form_submit">
                    </div>
                </form>



                <div class="row pt-4">
                    <form action="member-reg.php" method="post">








                        


                        <div class="text-center my-5">
                            <input type="submit" value="Submit" class="btn input1" name="form_sumit">

                            <input type="submit" value="Edit" class="btn input2 ms-3" name="form_sumit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'parts /footer.php';
?>