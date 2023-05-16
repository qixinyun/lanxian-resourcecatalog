<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['GGXYZHPJ'] => 'GGXYZHPJ',
        IResourceCatalog::TYPE['HRBXX'] => 'HRBXX',
        IResourceCatalog::TYPE['ZYZXX'] => 'ZYZXX',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'SYDWFRDJXX',
        IResourceCatalog::TYPE['XSPJXX'] => 'XSPJXX',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'SXBZXJGXX',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['SXSZLJDW'] => 'SXSZLJDW',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['PGJGXX'] => 'PGJGXX',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'CPTGLSZXCPRZMD',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'XZXKQYXX',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => 'JKQYPJAJYSMD',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'GJJLTQYRZXX',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'HSZYZGZXX',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'YSZYZCHBGZC',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'YSZYZGZXX',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'WSHJHSYWYHJCXX',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'YLHJSFWJGXX',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'JBYFKZJGXX',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'FYCRYJLXX',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'WSZYJSZGKSWJXX',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'QSWCXXXJDWBZ',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'QIYEJBXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['SXMPCPXX'] => 'SXMPCPXX',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['LLSTYXHDJXX'] => 'LLSTYXHDJXX',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => 'YHYJRJGCFXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'ZDSSWFAJXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['SPFYSXK'] => 'SPFYSXK',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'FDCKFQYZZXX',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'JGRYXXSFGJ',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'QXTCHJBHJDXX',
        IResourceCatalog::TYPE['SYDWJBXX'] => 'SYDWJBXX',
        IResourceCatalog::TYPE['HTLY'] => 'HTLY',
        IResourceCatalog::TYPE['QYHYSJ'] => 'QYHYSJ',
        IResourceCatalog::TYPE['ZDRQXYDA'] => 'ZDRQXYDA',
        IResourceCatalog::TYPE['XYSFSQ'] => 'XYSFSQ',
        IResourceCatalog::TYPE['CCJCJG'] => 'CCJCJG',
        IResourceCatalog::TYPE['XZCJ'] => 'XZCJ',
        IResourceCatalog::TYPE['XZJDJC'] => 'XZJDJC',
        IResourceCatalog::TYPE['XZJL'] => 'XZJL',
        IResourceCatalog::TYPE['XZQR'] => 'XZQR',
        IResourceCatalog::TYPE['XZQZ'] => 'XZQZ',
        //@position
        IResourceCatalog::TYPE['TEST'] => 'TEST',
    );
}
