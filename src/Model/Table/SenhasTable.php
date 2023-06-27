<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Senhas Model
 *
 * @method \App\Model\Entity\Senha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Senha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Senha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Senha|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Senha saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Senha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Senha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Senha findOrCreate($search, callable $callback = null, $options = [])
 */
class SenhasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('senhas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 100)
            ->allowEmptyString('senha');

        $validator
            ->requirePresence('active', 'create')
            ->notEmptyString('active');

        $validator
            ->dateTime('modify_on')
            ->allowEmptyDateTime('modify_on');

        $validator
            ->dateTime('date_current')
            ->allowEmptyDateTime('date_current');

        return $validator;
    }
}
