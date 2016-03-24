<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Work;

/**
 * WorkSearch represents the model behind the search form about `app\models\Work`.
 */
class WorkSearch extends Work
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id', 'work_release'], 'integer'],
            [['work_pay', 'work_job', 'work_company', 'work_area', 'work_study'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Work::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'work_id' => $this->work_id,
            'work_release' => $this->work_release,
        ]);

        $query->andFilterWhere(['like', 'work_pay', $this->work_pay])
            ->andFilterWhere(['like', 'work_job', $this->work_job])
            ->andFilterWhere(['like', 'work_company', $this->work_company])
            ->andFilterWhere(['like', 'work_area', $this->work_area])
            ->andFilterWhere(['like', 'work_study', $this->work_study]);

        return $dataProvider;
    }
}
