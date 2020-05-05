// automatically generated by the FlatBuffers compiler, do not modify

package ppx

import java.nio.*
import kotlin.math.sign
import com.google.flatbuffers.*

@Suppress("unused")
@ExperimentalUnsignedTypes
class Bernoulli : Table() {

    fun __init(_i: Int, _bb: ByteBuffer)  {
        __reset(_i, _bb)
    }
    fun __assign(_i: Int, _bb: ByteBuffer) : Bernoulli {
        __init(_i, _bb)
        return this
    }
    val probs : ppx.Tensor? get() = probs(ppx.Tensor())
    fun probs(obj: ppx.Tensor) : ppx.Tensor? {
        val o = __offset(4)
        return if (o != 0) {
            obj.__assign(__indirect(o + bb_pos), bb)
        } else {
            null
        }
    }
    companion object {
        fun validateVersion() = Constants.FLATBUFFERS_1_12_0()
        fun getRootAsBernoulli(_bb: ByteBuffer): Bernoulli = getRootAsBernoulli(_bb, Bernoulli())
        fun getRootAsBernoulli(_bb: ByteBuffer, obj: Bernoulli): Bernoulli {
            _bb.order(ByteOrder.LITTLE_ENDIAN)
            return (obj.__assign(_bb.getInt(_bb.position()) + _bb.position(), _bb))
        }
        fun createBernoulli(builder: FlatBufferBuilder, probsOffset: Int) : Int {
            builder.startTable(1)
            addProbs(builder, probsOffset)
            return endBernoulli(builder)
        }
        fun startBernoulli(builder: FlatBufferBuilder) = builder.startTable(1)
        fun addProbs(builder: FlatBufferBuilder, probs: Int) = builder.addOffset(0, probs, 0)
        fun endBernoulli(builder: FlatBufferBuilder) : Int {
            val o = builder.endTable()
            return o
        }
    }
}
