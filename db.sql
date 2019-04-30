create table flower_brand(
    id mediumint unsigned not null auto_increment comment 'id',
    brand_name varchar(30) not null comment '品牌名称',
   site_url varchar(150) not null default '' comment '官方网址',
   logo varchar(150) not null default '' comment '品牌logo',
     primary key(id)
    )engine=InnoDB default charset=utf8 comment '品牌';

 alter table flower_goods add brand_id mediumint unsigned not null default '0' comment '品牌id';
-- idmen记得创建索引
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


CREATE TABLE flower_cate(
    id mediumint unsigned not null  auto_increment comment 'id',
    cate_name varchar(30) not null comment '分类名',
    primary key (id)
)engine=InnoDB default charset=utf8 comment '分类表';



create table flower_attribute(
   id mediumint unsigned not null  auto_increment comment 'id',
    attr_name varchar(30) not null comment '属性名称',
    attr_type enum('唯一','可选') not null comment '属性类型',
     attr_option varchar(250) not null default '' comment '属性可选值',
     primary key(id)
   )engine=InnoDB default charset=utf8 comment '属性表';



create table flower_privilege(
     id mediumint unsigned not null  auto_increment comment 'id',
     pri_name varchar(100) not null comment '权限名称',
    module_name varchar(30) not null comment '模块名称',
    controller_name varchar(30) not null  comment '控制器名称',
    action_name varchar(30) not null  comment '方法名称',
    parent_id mediumint unsigned not null comment '上级权限名称',
     primary key(id)
     )engine=InnoDB default charset=utf8 comment '属性表';


     create table flower_admin(
        id mediumint unsigned not null  auto_increment comment 'id',
        username varchar(30) not null comment '用户名',
        password varchar(30) not null comment '密码',
        primary key(id)
    )engine=InnoDB default charset=utf8 comment '管理员表';

    create table flower_role(
   id mediumint unsigned not null  auto_increment comment 'id',
    role_name varchar(30) comment '角色名称',
   primary key(id)
    )engine=InnoDB default charset=utf8 comment '属性表';

   create table flower_role_pri(
    pri_id mediumint unsigned not null   comment '权限id',
    role_id mediumint unsigned not null   comment '角色id'
    )engine=InncaoDB default charset=utf8 comment '权限角色表';

 create table flower_admin_role(
    admin_id mediumint unsigned not null   comment '管理员id',
    role_id mediumint unsigned not null   comment '角色id'
    )engine=InnoDB default charset=utf8 comment '管理员角色表';






create table flower_member(
id mediumint unsigned not null  auto_increment comment 'id',
 username varchar(30) not null comment '用户名',
  password varchar(32) not null comment '密码',
  primary key(id),
   face varchar(150) not null comment '头像',
  jibie mediumint unsigned not null default 0 comment '积分'
 )engine=InnoDB default charset=utf8 comment '会员表';

 create table flower_comment(
    id mediumint unsigned not null  auto_increment comment 'id',
     goods_id mediumint unsigned not null comment '商品id',
     member_id mediumint unsigned not null comment '会员id',
     content varchar(200) not null comment '内容',
     addtime datetime not null comment '发表时间',
     star tinyint unsigned not null comment '分值',
     click_count smallint unsigned not null,
     primary key(id)
     )engine=InnoDB default charset=utf8 comment '评论表';


    create table flower_reply(
        id mediumint unsigned not null  auto_increment comment 'id',
        comment_id mediumint unsigned not null comment '评论id',
     member_id mediumint unsigned not null comment '会员id',
     content varchar(200) not null comment '内容',
     addtime datetime not null comment '回复时间',
     primary key(id)
     )engine=InnoDB default charset=utf8 comment '评论回复表';


create table flower_member_lever(
    id mediumint unsigned not null  auto_increment comment 'id',
    lever_name varchar(15) not null comment '会员名称',
    score_upper mediumint unsigned not null  comment '积分上限',
    score_lower mediumint unsigned not null   comment '积分下限',
    primary key (id)
)engine=InnoDB default charset=utf8 comment '会员级别表';

create table flower_member_price(
    id mediumint unsigned not null  auto_increment comment 'id',
    price decimal(10,2) not null comment '会员价格',
    level_id mediumint unsigned not null comment '会员级别id',
    goods_id mediumint unsigned not null comment '商品id',
    primary key (id),
    key level_id(level_id),
    key goods_id(goods_id)
)engine=InnoDB default charset=utf8 comment '会员价格表';

create table flower_goods_number(
     goods_id mediumint unsigned not null comment '商品id',
     goods_number mediumint unsigned not null default '0' comment '库存量',
     good_attr_id varchar(150) not null comment '商品属性表的id',
     key goods_id(goods_id)
)engine=InnoDB default charset=utf8 comment '库存表';



create table flower_cart(
 id mediumint unsigned not null  auto_increment comment 'id',
  goods_id mediumint unsigned not null comment '商品id',
     good_attr_id varchar(150) not null comment '商品属性表的id',
      member_id mediumint unsigned not null comment '会员id',
       goods_number mediumint unsigned not null comment '购买的数量',
       primary key (id)
)engine=InnoDB default charset=utf8 comment '购物车';

create table flower_order(
    id mediumint unsigned not null  auto_increment comment 'id',
    member_id mediumint unsigned not null comment '会员id',
    addtime datetime not null comment '添加时间',
    pay_status enum('是','否') not null default '否' comment '支付状态',
    pay_time int unsigned not null default '0' comment '支付时间',
    total_price decimal(10,2) not null comment '订单总价',
    reveive_name varchar(30) not null comment '收货人姓名',
    reveive_tel varchar(30) not null comment '收货人电话',
    reveive_province varchar(30) not null comment '收货人所在省',
    reveive_city varchar(30) not null comment '收货人所在市',
    reveive_area varchar(30) not null comment '收货人所在区县',
    reveive_addr varchar(30) not null comment '收货人详细地址',
    primary key (id)
)engine=InnoDB default charset=utf8 comment '订单表';

create table flower_order_goods(
    id mediumint unsigned not null  auto_increment comment 'id',
    order_id mediumint unsigned not null comment '订单id',
    goods_id mediumint unsigned not null comment '商品id',
    good_attr_id varchar(150) not null comment '商品属性表的id',
    goods_number mediumint unsigned not null comment '购买的数量',
    price decimal (10,2) not null comment '购买的价格',
    primary key (id)
)engine=InnoDB default charset=utf8 comment '订单商品表';

create table flower_order_goods(
    id mediumint unsigned not null  auto_increment comment 'id',
    order_id mediumint unsigned not null comment '订单id',
    goods_id mediumint unsigned not null comment '商品id',
    good_attr_id varchar(150) not null comment '商品属性表的id',
    goods_number mediumint unsigned not null comment '购买的数量',
    price decimal (10,2) not null comment '购买的价格',
    primary key (id)
)engine=InnoDB default charset=utf8 comment '订单商品表';


create table flower_impression(
    id mediumint unsigned not null  auto_increment comment 'id',
    goods_id mediumint unsigned not null comment '商品id',
    impression_name varchar (30) not null comment '印象名称',
    impression_count smallint unsigned not null default '1' comment '印象的次数',
     primary key (id)
)engine=InnoDB default charset=utf8 comment '印象表';