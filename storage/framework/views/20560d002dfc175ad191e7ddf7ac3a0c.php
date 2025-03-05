<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page.title', 'Ресторан "Полумесяц'); ?></title>
    <link rel="stylesheet" href="css/styl.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="d-flex flex-column justify-content-between min-vh-100">

        <?php echo $__env->make('stkeeper.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <main class="flex-grow-1 py-3">
            <div class="container-xxl">
                <div class="container">
                    <h1 class="text-center">Оформление заказа</h1>

                    <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('stkeeper.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Поставщик</th>
                                    <th>Наименование запчасти</th>
                                    <th>Количество</th>
                                    <th>Срок поставки</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="id_supplier" class="form-control">
                                            <option value="">Выберите поставщика</option>
                                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($supplier->id); ?>" <?php echo e(old('id_supplier') == $supplier->id ? 'selected' : ''); ?>>
                                                <?php echo e($supplier->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="id_part" class="form-control">
                                            <option value="">Выберите запчасть</option>
                                            <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($part->id); ?>" data-price="<?php echo e($part->price); ?>" <?php echo e(old('id_part') == $part->id ? 'selected' : ''); ?>>
                                                <?php echo e($part->name); ?> (<?php echo e($part->price); ?> руб.)
                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td><input type="number" name="quantity" value="<?php echo e(old('quantity')); ?>" class="form-control" min="1"></td>
                                    <td><input type="date" name="delivery_date" value="<?php echo e(old('delivery_date')); ?>" class="form-control"></td>
                                    <td><button type="submit" class="btn btn-success">Сохранить</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\OSPanel\home\servis\public\resources\views/stkeeper/zakaz.blade.php ENDPATH**/ ?>