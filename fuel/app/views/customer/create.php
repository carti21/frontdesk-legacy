<h2 class="page-header">New <span class='text-muted'>Customer</span>&nbsp;
    <span><?= Html::anchor('registers/customers', '<i class="fa fa-level-down fa-fw fa-rotate-180"></i> Back to List', array('class' => 'btn btn-default btn-xs')); ?></span>
</h2>

<br>

<?= render(basename(__DIR__) . '/_form'); ?>

