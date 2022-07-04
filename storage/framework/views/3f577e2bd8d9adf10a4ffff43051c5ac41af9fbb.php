
































    <!DOCTYPE html>
<html lang= lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('/css/bootstrap.rtl.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('/css/style.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('/css/all.css')); ?>" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body >
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <ul class="list-group ">
                <?php $__currentLoopData = $massages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $massage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="list-group-item d-flex justify-content-between align-items-start" id="msg">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <img src='img/acc.png ' class='rounded-circle me-2' width='35' height='35'>

                                <?php echo e($massage->name); ?>



                            </div >
                            <p style ="text-indent: 45px; font-size :18px; height:15px;" >

                                <?php echo e($massage->text); ?>

                            </p>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?php echo e($massage->created_at); ?></span>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

    <form method="post" action="/send-message">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">نام</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">متن پیام</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
    
</div>





<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>



</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\labi\resources\views/welcome.blade.php ENDPATH**/ ?>