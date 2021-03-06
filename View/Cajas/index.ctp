


<?php echo $this->element('Risto.layout_modal_edit', array('title'=>'Caja'));?>


<div class="content-white">



<?php echo $this->Html->link("Nueva Caja", array('action'=>'add'), array(
        'class' => 'btn btn-success btn-lg pull-right btn-add'
)); ?>


<h1>Listado de Cajas</h1>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Cant. Arqueos</th>
            <th>Computa Cobros</th>
            <th>Computa Pagos</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cajas as $c) { ?>
            <tr>
                <td><?php echo $c['Caja']['id'] ?></td>
                <td><?php echo $c['Caja']['name'] ?></td>
                <td><?php echo $c['Caja']['cant_arqueos'] ?></td>
                <td><?php echo empty($c['Caja']['computa_ingresos']) ? 'no' : 'si'; ?></td>
                <td><?php echo empty($c['Caja']['computa_egresos']) ? 'no' : 'si'; ?></td>
                <td><?php echo $this->Html->link('nuevo arqueo', array('controller' => 'arqueos', 'action' => 'add', $c['Caja']['id'])) ?></td>
                <td>
                    <?php echo $this->Html->link('editar', array(
                                                    'action'=>'edit' , 
                                                    $c['Caja']['id']
                                                ), 
                                                array(
                                                    'class'=>'btn-edit'
                                                ) 
                                            ) ?></td>
                <td><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $c['Caja']['id']), null, sprintf(__('¿Está seguro que desea borrar la caja: %s?', true), $c['Caja']['name'])); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>