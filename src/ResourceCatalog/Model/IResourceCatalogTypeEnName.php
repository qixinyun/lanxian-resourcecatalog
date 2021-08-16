<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCF'] => 'xbxzcf',
        IResourceCatalog::TYPE['XBXZXK'] => 'xbxzxk',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'jgjcdxzjl',
        IResourceCatalog::TYPE['SJJXMXX'] => 'sjjxmxx',
        IResourceCatalog::TYPE['GGXYZHPJ'] => 'ggxyzhpj',
        IResourceCatalog::TYPE['HRBXX'] => 'hrbxx',
        IResourceCatalog::TYPE['ZYZXX'] => 'zyzxx',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'sydwfrdjxx',
        IResourceCatalog::TYPE['XSPJXX'] => 'xspjxx',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'sxbzxjgxx',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'sxbzxrmd',
        IResourceCatalog::TYPE['JSZGXX'] => 'jszgxx',
        IResourceCatalog::TYPE['SJYXXS'] => 'sjyxxs',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'jyjgxinxi',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'grryxxjyj',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'jgryxxsjyj',
        IResourceCatalog::TYPE['SXSZLJDW'] => 'sxszljdw',
        IResourceCatalog::TYPE['QYRYXX'] => 'qyryxx',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'yscrjzjjjzgrdxx',
        IResourceCatalog::TYPE['JDCWFXX'] => 'jdcwfxx',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'shzznjxx',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'grryxxmzj',
        IResourceCatalog::TYPE['MBFQYML'] => 'mbfqyml',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'shttdjxx',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'sfjdjgcyryzgxx',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'sfjdjgdjxx',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'gzjgjbxx',
        IResourceCatalog::TYPE['GZYXX'] => 'gzyxx',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'jcflfwsxx',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'jcflfwgzzjbxx',
        IResourceCatalog::TYPE['LSSWSXX'] => 'lsswsxx',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'lszyzgzxx',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'jgryxxssfj',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'zfcgdljgxx',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'zyjnzsxx',
        IResourceCatalog::TYPE['YLBXXX'] => 'ylbxxx',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'yztqsbxxhmd',
        IResourceCatalog::TYPE['SYBXXX'] => 'sybxxx',
        IResourceCatalog::TYPE['SBQYXX'] => 'sbqyxx',
        IResourceCatalog::TYPE['GZRYXX'] => 'grryxx',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'yztqnmggzhmd',
        IResourceCatalog::TYPE['PGJGXX'] => 'pgjgxx',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'cptglszxcprzmd',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'zljcqyxx',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'xzxkqyxx',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'slysxkzxx',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'grryxxjtj',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'slgczbxx',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => 'jkqypjajysmd',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'gjjltqyrzxx',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'escjdpgjghzzs',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'hszyzgzxx',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'yszyzchbgzc',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'yszyzgzxx',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'wshjhsywyhjcxx',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'ylhjsfwjgxx',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'jbyfkzjgxx',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'fycryjlxx',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'wszyjszgkswjxx',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'qswcxxxjdwbz',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'qiyejbxx',
        IResourceCatalog::TYPE['GTGSHXX'] => 'gtgshxx',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'cmqysbxx',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'yplsqyxx',
        IResourceCatalog::TYPE['JGRYXX'] => 'jgryxx',
        IResourceCatalog::TYPE['SXQYHMD'] => 'sxqyhmd',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'spyptsjbjlgr',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'spyptsjbjldw',
        IResourceCatalog::TYPE['SXMPCPXX'] => 'sxmpcpxx',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'qyycmlxx',
        IResourceCatalog::TYPE['QYZXXX'] => 'qyzxxx',
        IResourceCatalog::TYPE['QYDXXX'] => 'qydxxx',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'ccjcjgxx',
        IResourceCatalog::TYPE['LLSTYXHDJXX'] => 'llstyxhdjxx',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'dtjxjgrxx',
        IResourceCatalog::TYPE['TJDCDXML'] => 'tjdcdxml',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => 'yhyjrjgcfxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx',
        IResourceCatalog::TYPE['AJNSRXX'] => 'ajnsrxx',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'zdsswfajxx',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'qydsxzcfxx',
        IResourceCatalog::TYPE['SPFYSXK'] => 'spfysxk',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'fdckfqyzzxx',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'jgryxxsfgj',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'qxtchjbhjdxx',
        IResourceCatalog::TYPE['SYDWJBXX'] => 'sydwjbxx',
        IResourceCatalog::TYPE['HTLY'] => 'htly',
        IResourceCatalog::TYPE['QYHYSJ'] => 'qyhysj',
        IResourceCatalog::TYPE['ZDRQXYDA'] => 'zdrqxyda',
        IResourceCatalog::TYPE['XYSFSQ'] => 'xysfsq',
        IResourceCatalog::TYPE['CCJCJG'] => 'ccjcjg',
        //@position
        IResourceCatalog::TYPE['TEST'] => 'test',
    );
}