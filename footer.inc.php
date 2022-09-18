<?php
require('conForLogin.php');
function validation($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$error="";
if(isset($_POST['subscribe'])){
    $email=$_POST['newsletter'];
    $email=validation($email);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL) || !preg_match("/com$/",$email)){
        $error="Email is invalid !";

    }
    else{
        $sql="INSERT INTO `newsletteremails`(`Email`) VALUES('$email');";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location:".$_SERVER['PHP_SELF']);
        }
    }
}

?>

<!-- footer -->
<footer class="bg-dark text-white py-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Senpai</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, fugiat.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newsletter</h4>
                <form method="post" class="form-row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email*" name="newsletter">
                            <button class="btn btn-primary" type="submit" name="subscribe">Subsrcibe</button>
                        </div>
                        <?php echo "<span class='text-danger'> $error </span>" ?>
                    </div>
                    <div class="col">

                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="cart.php" class="font-rale font-size-14 text-white-50 pb-1">My Orders</a>
                    <a href="cart.php" class="font-rale font-size-14 text-white-50 pb-1">Wishlist</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newsletter</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">Mobile Senpai &copy; Copyrights 2022. Design By <a href="#" class="color-second">Lazy Developers</a></p>
</div>
<!-- footer -->
</main>
<!-- main body-->

<!-- jquery cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<!-- Bootstrap cdn link for js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/4c7b5d3329.js" crossorigin="anonymous"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Isotope cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom JS -->
<script src="script.js"></script>

</body>

</html>