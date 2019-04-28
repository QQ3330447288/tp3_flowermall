create table flower_brand(
    id mediumint unsigned not null auto_increment comment 'id',
    brand_name varchar(30) not null comment '品牌名称',
   site_url varchar(150) not null default '' comment '官方网址',
   logo varchar(150) not null default '' comment '品牌logo',
     primary key(id)
    )engine=InnoDB default charset=utf8 comment '品牌';

 alter table flower_goods add brand_id mediumint unsigned not null default '0' comment '品牌id';
-- brand_id记得创建索引
create table  if not exists flower_goods (
  goods_id mediumint unsigned not null  auto_increment comment 'id',
  goods_name varchar(150) not null comment '商品名称',
  shop_price decimal(10,2) not null  comment '本店价格',
  market_price decimal(10,2) not null default 0 comment '市场价格',
  goods_desc longtext comment '商品描述',
  is_on_sale enum('是','否') not null default '是' comment '是否上架',
  is_delete enum('是','否') not null default '否' comment '是否放到回收站',
  addtime datetime not null comment '添加时间',
  logo varchar(150) not null default  '' comment '原图',
  sm_logo varchar(150) not null default  '' comment '小图',
  mid_logo varchar(150) not null default  '' comment '中图',
  big_logo varchar(150) not null default  '' comment '大图',
  mbig_logo varchar(150) not null default  '' comment '更大图',
  primary key (goods_id),
  key shop_price(shop_price),
  key addtime(addtime),
  key is_on_sale(is_on_sale)
)engine=InnoDB default charset=utf8;

 create table flower_type(
    id mediumint unsigned not null  auto_increment comment 'id',
    type_name varchar(30) not null comment '类型名称',
    primary key(id)
    )engine=InnoDB default charset=utf8 comment '类型';

mysql> create table flower_attribute(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> attr_name varchar(30) not null comment '属性名称',
    -> primary key(id)
    -> )engine=InnoDB default charset=utf8 comment '属性表';

mysql> create table flower_privilege(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> pri_name varchar(100) not null comment '权限名称',
    -> module_name varchar(30) not null comment '模块名称',
    -> controller_name varchar(30) not null  comment '控制器名称',
    -> action_name varchar(30) not null  comment '方法名称',
    -> parent_id mediumint unsigned not null comment '上级权限名称',
    -> primary key(id)
    -> )engine=InnoDB default charset=utf8 comment '属性表';


    mysql> create table flower_admin(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> username varchar(30) not null comment '用户名',
    -> password varchar(30) not null comment '密码',
    -> primary key(id)
    -> )engine=InnoDB default charset=utf8 comment '属性表';

    mysql> create table flower_role(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> role_name varchar(30) comment '角色名称',
    -> primary key(id)
    -> )engine=InnoDB default charset=utf8 comment '属性表';

mysql> create table flower_member(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> username varchar(30) not null comment '用户名',
    -> password varchar(30) not null comment '密码',
    -> primary key(id),
    -> face varchar(150) not null comment '头像',
    -> jibie mediumint unsigned not null default 0 comment '积分'
    -> )engine=InnoDB default charset=utf8 comment '属性表';

mysql> create table flower_comment(
    -> id mediumint unsigned not null  auto_increment comment 'id',
    -> goods_id mediumint unsigned not null comment '商品id',
    -> member_id mediumint unsigned not null comment '会员id',
    -> content varchar(200) not null comment '内容',
    -> addtime datetime not null comment '发表时间',
    -> star tinyint unsigned not null comment '分值',
    -> click_count smallint unsigned not null,
    -> primary key(id)
    -> )engine=InnoDB default charset=utf8 comment '属性表';