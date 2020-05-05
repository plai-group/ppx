// Code generated by the FlatBuffers compiler. DO NOT EDIT.

package ppx

import (
	flatbuffers "github.com/google/flatbuffers/go"
)

type LogNormal struct {
	_tab flatbuffers.Table
}

func GetRootAsLogNormal(buf []byte, offset flatbuffers.UOffsetT) *LogNormal {
	n := flatbuffers.GetUOffsetT(buf[offset:])
	x := &LogNormal{}
	x.Init(buf, n+offset)
	return x
}

func (rcv *LogNormal) Init(buf []byte, i flatbuffers.UOffsetT) {
	rcv._tab.Bytes = buf
	rcv._tab.Pos = i
}

func (rcv *LogNormal) Table() flatbuffers.Table {
	return rcv._tab
}

func (rcv *LogNormal) Loc(obj *Tensor) *Tensor {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(4))
	if o != 0 {
		x := rcv._tab.Indirect(o + rcv._tab.Pos)
		if obj == nil {
			obj = new(Tensor)
		}
		obj.Init(rcv._tab.Bytes, x)
		return obj
	}
	return nil
}

func (rcv *LogNormal) Scale(obj *Tensor) *Tensor {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(6))
	if o != 0 {
		x := rcv._tab.Indirect(o + rcv._tab.Pos)
		if obj == nil {
			obj = new(Tensor)
		}
		obj.Init(rcv._tab.Bytes, x)
		return obj
	}
	return nil
}

func LogNormalStart(builder *flatbuffers.Builder) {
	builder.StartObject(2)
}
func LogNormalAddLoc(builder *flatbuffers.Builder, loc flatbuffers.UOffsetT) {
	builder.PrependUOffsetTSlot(0, flatbuffers.UOffsetT(loc), 0)
}
func LogNormalAddScale(builder *flatbuffers.Builder, scale flatbuffers.UOffsetT) {
	builder.PrependUOffsetTSlot(1, flatbuffers.UOffsetT(scale), 0)
}
func LogNormalEnd(builder *flatbuffers.Builder) flatbuffers.UOffsetT {
	return builder.EndObject()
}
