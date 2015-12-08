<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'cle' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'username' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'prenom' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'telephone' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null],
        'actif' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'sqlite_autoindex_users_1' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'cle' => 'Lorem ipsum dolor sit amet',
            'username' => 'Lorem ipsum dolor sit amet',
            'prenom' => 'Lorem ipsum dolor ',
            'telephone' => 'Lorem ip',
            'email' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'actif' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
