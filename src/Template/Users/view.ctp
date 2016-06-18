<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets Types'), ['controller' => 'AssetsTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assets Type'), ['controller' => 'AssetsTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Audit Trails'), ['controller' => 'AuditTrails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Trail'), ['controller' => 'AuditTrails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['controller' => 'CashFlows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['controller' => 'CashFlows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drivers'), ['controller' => 'Drivers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Driver'), ['controller' => 'Drivers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receipts'), ['controller' => 'Receipts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receipt'), ['controller' => 'Receipts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stolen'), ['controller' => 'Stolen', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stolen'), ['controller' => 'Stolen', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User Type') ?></th>
            <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fname') ?></th>
            <td><?= h($user->fname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lname') ?></th>
            <td><?= h($user->lname) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Employee Number') ?></th>
            <td><?= h($user->employee_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Cellphone') ?></th>
            <td><?= h($user->cellphone) ?></td>
        </tr>
        <tr>
            <th><?= __('Permissions') ?></th>
            <td><?= h($user->permissions) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assets') ?></h4>
        <?php if (!empty($user->assets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Asset Type Id') ?></th>
                <th><?= __('Allocation') ?></th>
                <th><?= __('Asset Value') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Craeted') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->assets as $assets): ?>
            <tr>
                <td><?= h($assets->id) ?></td>
                <td><?= h($assets->user_id) ?></td>
                <td><?= h($assets->modified_by) ?></td>
                <td><?= h($assets->asset_type_id) ?></td>
                <td><?= h($assets->allocation) ?></td>
                <td><?= h($assets->asset_value) ?></td>
                <td><?= h($assets->status) ?></td>
                <td><?= h($assets->craeted) ?></td>
                <td><?= h($assets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Assets', 'action' => 'view', $assets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Assets', 'action' => 'edit', $assets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assets', 'action' => 'delete', $assets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Assets Types') ?></h4>
        <?php if (!empty($user->assets_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Careated') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->assets_types as $assetsTypes): ?>
            <tr>
                <td><?= h($assetsTypes->id) ?></td>
                <td><?= h($assetsTypes->user_id) ?></td>
                <td><?= h($assetsTypes->name) ?></td>
                <td><?= h($assetsTypes->careated) ?></td>
                <td><?= h($assetsTypes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AssetsTypes', 'action' => 'view', $assetsTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AssetsTypes', 'action' => 'edit', $assetsTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssetsTypes', 'action' => 'delete', $assetsTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetsTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Audit Trails') ?></h4>
        <?php if (!empty($user->audit_trails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Ip Address') ?></th>
                <th><?= __('Device Type') ?></th>
                <th><?= __('Discription') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->audit_trails as $auditTrails): ?>
            <tr>
                <td><?= h($auditTrails->id) ?></td>
                <td><?= h($auditTrails->user_id) ?></td>
                <td><?= h($auditTrails->ip_address) ?></td>
                <td><?= h($auditTrails->device_type) ?></td>
                <td><?= h($auditTrails->discription) ?></td>
                <td><?= h($auditTrails->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AuditTrails', 'action' => 'view', $auditTrails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AuditTrails', 'action' => 'edit', $auditTrails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AuditTrails', 'action' => 'delete', $auditTrails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditTrails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cash Flows') ?></h4>
        <?php if (!empty($user->cash_flows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Driver Id') ?></th>
                <th><?= __('Litres') ?></th>
                <th><?= __('Amount') ?></th>
                <th><?= __('Fuel Price') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->cash_flows as $cashFlows): ?>
            <tr>
                <td><?= h($cashFlows->id) ?></td>
                <td><?= h($cashFlows->user_id) ?></td>
                <td><?= h($cashFlows->modified_by) ?></td>
                <td><?= h($cashFlows->driver_id) ?></td>
                <td><?= h($cashFlows->litres) ?></td>
                <td><?= h($cashFlows->amount) ?></td>
                <td><?= h($cashFlows->fuel_price) ?></td>
                <td><?= h($cashFlows->created) ?></td>
                <td><?= h($cashFlows->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CashFlows', 'action' => 'view', $cashFlows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CashFlows', 'action' => 'edit', $cashFlows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CashFlows', 'action' => 'delete', $cashFlows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashFlows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Drivers') ?></h4>
        <?php if (!empty($user->drivers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Fname') ?></th>
                <th><?= __('Lname') ?></th>
                <th><?= __('Id Number') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Licence Expiry Date') ?></th>
                <th><?= __('Cash Flow Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->drivers as $drivers): ?>
            <tr>
                <td><?= h($drivers->id) ?></td>
                <td><?= h($drivers->user_id) ?></td>
                <td><?= h($drivers->modified_by) ?></td>
                <td><?= h($drivers->fname) ?></td>
                <td><?= h($drivers->lname) ?></td>
                <td><?= h($drivers->id_number) ?></td>
                <td><?= h($drivers->contact_number) ?></td>
                <td><?= h($drivers->licence_expiry_date) ?></td>
                <td><?= h($drivers->cash_flow_id) ?></td>
                <td><?= h($drivers->created) ?></td>
                <td><?= h($drivers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Drivers', 'action' => 'view', $drivers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Drivers', 'action' => 'edit', $drivers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Drivers', 'action' => 'delete', $drivers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drivers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Maintenances') ?></h4>
        <?php if (!empty($user->maintenances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th><?= __('Dealer Id') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Reciept Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->maintenances as $maintenances): ?>
            <tr>
                <td><?= h($maintenances->id) ?></td>
                <td><?= h($maintenances->user_id) ?></td>
                <td><?= h($maintenances->modified_by) ?></td>
                <td><?= h($maintenances->vehicle_id) ?></td>
                <td><?= h($maintenances->dealer_id) ?></td>
                <td><?= h($maintenances->contact_number) ?></td>
                <td><?= h($maintenances->reciept_id) ?></td>
                <td><?= h($maintenances->created) ?></td>
                <td><?= h($maintenances->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Maintenances', 'action' => 'view', $maintenances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Maintenances', 'action' => 'edit', $maintenances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maintenances', 'action' => 'delete', $maintenances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Receipts') ?></h4>
        <?php if (!empty($user->receipts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Dealer Id') ?></th>
                <th><?= __('Receipt Folder') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->receipts as $receipts): ?>
            <tr>
                <td><?= h($receipts->id) ?></td>
                <td><?= h($receipts->user_id) ?></td>
                <td><?= h($receipts->modified_by) ?></td>
                <td><?= h($receipts->dealer_id) ?></td>
                <td><?= h($receipts->receipt_folder) ?></td>
                <td><?= h($receipts->created) ?></td>
                <td><?= h($receipts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Receipts', 'action' => 'view', $receipts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Receipts', 'action' => 'edit', $receipts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Receipts', 'action' => 'delete', $receipts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sales') ?></h4>
        <?php if (!empty($user->sales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Buyer Name') ?></th>
                <th><?= __('Buyer Contact') ?></th>
                <th><?= __('Sell Date') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sales as $sales): ?>
            <tr>
                <td><?= h($sales->id) ?></td>
                <td><?= h($sales->user_id) ?></td>
                <td><?= h($sales->buyer_name) ?></td>
                <td><?= h($sales->buyer_contact) ?></td>
                <td><?= h($sales->sell_date) ?></td>
                <td><?= h($sales->price) ?></td>
                <td><?= h($sales->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sales', 'action' => 'view', $sales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sales', 'action' => 'edit', $sales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sales', 'action' => 'delete', $sales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Stolen') ?></h4>
        <?php if (!empty($user->stolen)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Asset Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Stolen Area') ?></th>
                <th><?= __('Date Stolen') ?></th>
                <th><?= __('Reported') ?></th>
                <th><?= __('Station Name') ?></th>
                <th><?= __('Case Number') ?></th>
                <th><?= __('Investigation Office') ?></th>
                <th><?= __('Telephone') ?></th>
                <th><?= __('Cellphone') ?></th>
                <th><?= __('Comments') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->stolen as $stolen): ?>
            <tr>
                <td><?= h($stolen->id) ?></td>
                <td><?= h($stolen->asset_id) ?></td>
                <td><?= h($stolen->user_id) ?></td>
                <td><?= h($stolen->stolen_area) ?></td>
                <td><?= h($stolen->date_stolen) ?></td>
                <td><?= h($stolen->reported) ?></td>
                <td><?= h($stolen->station_name) ?></td>
                <td><?= h($stolen->case_number) ?></td>
                <td><?= h($stolen->investigation_office) ?></td>
                <td><?= h($stolen->telephone) ?></td>
                <td><?= h($stolen->cellphone) ?></td>
                <td><?= h($stolen->comments) ?></td>
                <td><?= h($stolen->created) ?></td>
                <td><?= h($stolen->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stolen', 'action' => 'view', $stolen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stolen', 'action' => 'edit', $stolen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stolen', 'action' => 'delete', $stolen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stolen->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($user->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Dna Id Code') ?></th>
                <th><?= __('Battery Serial Number') ?></th>
                <th><?= __('Registration Number') ?></th>
                <th><?= __('Engine Number') ?></th>
                <th><?= __('Chassis Number') ?></th>
                <th><?= __('Make') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Color') ?></th>
                <th><?= __('Year') ?></th>
                <th><?= __('Kilometer') ?></th>
                <th><?= __('Service Due Date') ?></th>
                <th><?= __('Warranty Expiry Date') ?></th>
                <th><?= __('Certificate') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->user_id) ?></td>
                <td><?= h($vehicles->modified_by) ?></td>
                <td><?= h($vehicles->dna_id_code) ?></td>
                <td><?= h($vehicles->battery_serial_number) ?></td>
                <td><?= h($vehicles->registration_number) ?></td>
                <td><?= h($vehicles->engine_number) ?></td>
                <td><?= h($vehicles->chassis_number) ?></td>
                <td><?= h($vehicles->make) ?></td>
                <td><?= h($vehicles->model) ?></td>
                <td><?= h($vehicles->color) ?></td>
                <td><?= h($vehicles->year) ?></td>
                <td><?= h($vehicles->kilometer) ?></td>
                <td><?= h($vehicles->service_due_date) ?></td>
                <td><?= h($vehicles->warranty_expiry_date) ?></td>
                <td><?= h($vehicles->certificate) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td><?= h($vehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
