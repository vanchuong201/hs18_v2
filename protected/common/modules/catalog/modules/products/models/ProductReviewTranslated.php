<?php 
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
namespace products\models;
    
use usni\library\components\UiSecuredActiveRecord;
/**
 * ProductReviewTranslated class file
 * @package common\modules\products\models
 */
class ProductReviewTranslated extends UiSecuredActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getProductReview()
    {
        return $this->hasOne(ProductReview::className(), ['id' => 'owner_id']);
    }
}
?>