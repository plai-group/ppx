<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace ppx;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Categorical extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Categorical
     */
    public static function getRootAsCategorical(ByteBuffer $bb)
    {
        $obj = new Categorical();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function CategoricalIdentifier()
    {
        return "PPXF";
    }

    public static function CategoricalBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::CategoricalIdentifier());
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Categorical
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getProbs()
    {
        $obj = new ProtocolTensor();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startCategorical(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Categorical
     */
    public static function createCategorical(FlatBufferBuilder $builder, $probs)
    {
        $builder->startObject(1);
        self::addProbs($builder, $probs);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProbs(FlatBufferBuilder $builder, $probs)
    {
        $builder->addOffsetX(0, $probs, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endCategorical(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
