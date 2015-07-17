<td>
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Acción <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <?php foreach ($this->configuration->getValue('list.object_actions') as $name => $params): ?>
                <?php if ('_delete' == $name): ?>
                    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToDelete($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>
                <?php elseif ('_edit' == $name): ?>
                    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToEdit($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>
                <?php else: ?>
                    <li>
                        <?php echo $this->addCredentialCondition($this->getLinkToAction($name, $params, true), $params) ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</td>