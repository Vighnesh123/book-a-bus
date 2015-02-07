<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?php echo $customer['Customer']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($customer['Customer']['id'],
array('controller' => 'customers', 'action' => 'view', $customer['Customer']['id'])); ?>
        </td>
        <td><?php echo $customer['Customer']['phone']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>