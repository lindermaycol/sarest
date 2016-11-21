<?php 
 
namespace apipradsis\modules\v1\models;
 
use \yii\db\ActiveRecord;
/**
 * Project Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class User extends ActiveRecord
{
	public $NUSU_ID;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TBLPRO_USUARIO';
    }
 
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['NUSU_ID'];
    }
 
    /**
     * Define rules for validation
     */

    public function rules()
    {
        return [
            [['NUSU_ID'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'NUSU_ID' => 'NUSU_ID'
        ];
    }

    public function fields()
	{
	    return [
	        'NUSU_ID' => 'USUARIO_ID',       
	    ];
	}

	public function relations()
    {
        return array(
            'projects'=>array(self::HAS_MANY, 'Project', 'NUSU_ID'),
        );
    }

}