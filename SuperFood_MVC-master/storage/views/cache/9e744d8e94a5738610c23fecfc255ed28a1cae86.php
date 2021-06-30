<?php if(!checkPer($_SESSION['user']['id'], 'product_view')): ?>
    <?php (header('Location: /superFood_MVC/admin/dashboard')); ?>
<?php endif; ?>

<?php $__env->startSection('title'); ?><?php echo e('Product'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                    </ol>
                    <?php if(checkPer($_SESSION['user']['id'], 'product_add')): ?>
                        <a href="/superFood_MVC/admin/product/create" class="btn btn-primary addBtn">Thêm sản phẩm
                            <?php endif; ?>
                        </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Bảng sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Danh mục</th>
                                            <th>Tags</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><img
                                                            src="/superFood_MVC/backend/assets/images/<?php echo e($product->avatar); ?>"
                                                            alt="" width="100" height="100"></td>
                                                <td><?php echo e($product->name); ?></td>
                                                <td><?php echo e($product->description); ?></td>
                                                <td>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($product->category_id == $category->id): ?>
                                                            <?php echo e($category->name); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td>
                                                    <?php $__currentLoopData = $productTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($product->id == $productTag->product_id): ?>
                                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($tag->id == $productTag->tag_id): ?>
                                                                    <?php echo e($tag->name . ','); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td>
                                                    <?php if(checkPer($_SESSION['user']['id'], 'product_edit')): ?>
                                                        <a class="btn btn-primary"
                                                           href="/superFood_MVC/admin/product/edit/<?php echo e($product->id); ?>">Sửa</a>
                                                    <?php endif; ?>
                                                    <?php if(checkPer($_SESSION['user']['id'], 'product_delete')): ?>
                                                        <a class="news_delete btn btn-danger"
                                                           href="/superFood_MVC/admin/product/delete/<?php echo e($product->id); ?>">Xóa</a>
                                                    <?php endif; ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SuperFood_MVC\resources\views/admin/product/index.blade.php ENDPATH**/ ?>