<?php 
 
namespace apipradsis\modules\v1\models;
 
use \yii\db\ActiveRecord;
/**
 * Project Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Project extends ActiveRecord
{
	

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TBLPRO_PROYECTO';
    }
 
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['NPRO_ID'];
    }
 
    /**
     * Define rules for validation
     */

    public function rules()
    {
        return [
            [['NPRO_ID', 'NEST_ID'], 'required']
        ];
    }

    /*public function attributeLabels()
    {
        return [
            'NPRO_ID' => 'NPRO_ID',
            'SPRO_PROYECTO' => 'SPRO_PROYECTO'
        ];
    }*/

    /*public function fields()
	{
	    return [
	        'SPRO_PROYECTO' => 'SPRO_PROYECTO',       
	    ];
	}*/

	/*public function relations()
    {
        return array(
            'users'=>array(self::BELONGS_TO, 'User', 'NUSU_ID'),
        );
    }*/
    

}