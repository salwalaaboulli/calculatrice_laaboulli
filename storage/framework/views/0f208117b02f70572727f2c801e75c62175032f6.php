<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pritesh Wadhia | Laravel Calculator</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/main.css')); ?>  ">  
    </head>
    <body>
    <div id="main-wrapper">
        <h1>Laravel Calculator</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(strlen(session('sum')) > 0): ?>
            <div class="alert alert-success">
                <?php echo e(session('val1')); ?>  <?php echo e(session('sign')); ?>  <?php echo e(session('val2')); ?> = <?php echo e(session('sum')); ?>

            </div>
        <?php endif; ?>
        <form method="get" action="<?php echo e(route('calculator.process')); ?>">
            <?php echo csrf_field(); ?>            
            <span>Value 1:</span>
            <input type="text" name="val1" size="10" value="<?php echo e(old('val1', session('val1'))); ?>" />
            <span>Operator:</span>
            <select name="operator">
                <option value="">Please select...</option>
                <option value="add" <?php echo e(( old('operator', session('operator')) == 'add') ? 'selected' : ''); ?>>+</option>
                <option value="multiply" <?php echo e(( old('operator', session('operator')) == 'multiply') ? 'selected' : ''); ?>>*</option>
                <option value="subtract" <?php echo e(( old('operator', session('operator')) == 'subtract') ? 'selected' : ''); ?>>-</option>
                <option value="divide" <?php echo e(( old('operator', session('operator')) == 'divide') ? 'selected' : ''); ?>>/</option>
            </select>          
            <span>Value 2:</span>
            <input type="text" name="val2" size="10" value="<?php echo e(old('val2', session('val2'))); ?>" />       
            <input type="submit" name="go" value="Calculate" />  
        </form>
    </div>
    </body>
</html>
<?php /**PATH D:\calculatrice-laabouli\resources\views/calculator.blade.php ENDPATH**/ ?>