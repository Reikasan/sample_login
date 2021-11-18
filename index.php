<?php include "includes/header.php"; ?>

<body>
    <header>
        <?php include "includes/navigation.php"; ?>
   </header>

   <?php include "includes/modal.php"; ?>

    <div class="cover w-100 h-100 index-cover">
        <div class="container">
            <div class="top">
                <h1 class="display-4">Find your <span class="nobreak">(future) Partner</span></h1>
                <div class="row">
                    <button class="col-md-6 offset-md-3" id="createAccount" data-toggle="modal" data-target="#signupModal">create account</button>
                </div>
                <div class="row">
                    <button class="col-md-6 offset-md-3" id="loginAccount" data-toggle="modal" data-target="#loginModal">login</button>
                </div>        
            </div>
        </div>
    </div>

<?php include "includes/footer.php"; ?>

