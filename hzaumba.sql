-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-31 10:21:19
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hzaumba`
--

-- --------------------------------------------------------

--
-- 表的结构 `mba_administrator`
--

CREATE TABLE IF NOT EXISTS `mba_administrator` (
  `user` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mba_administrator`
--

INSERT INTO `mba_administrator` (`user`, `password`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `mba_contents`
--

CREATE TABLE IF NOT EXISTS `mba_contents` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `zxjj` text NOT NULL,
  `zzjg` text NOT NULL,
  `jyln` text NOT NULL,
  `mba_xm` text NOT NULL,
  `edp_xm` text NOT NULL,
  `xnds` text NOT NULL,
  `xwds` text NOT NULL,
  `hzqy` text NOT NULL,
  `zsxx` text NOT NULL,
  `pyfa` text NOT NULL,
  `lwzd` text NOT NULL,
  `glsj` text NOT NULL,
  `kcap` text NOT NULL,
  `dbap` text NOT NULL,
  `zyfz` text NOT NULL,
  `lhhzc` text NOT NULL,
  `org` text NOT NULL,
  `xyfc` text NOT NULL,
  `lxwm` text NOT NULL,
  `xwzx` text NOT NULL,
  `tzgg` text NOT NULL,
  `xxzs` text NOT NULL,
  `xxjw` text NOT NULL,
  `xzzx` text NOT NULL,
  `yqlj` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mba_contents`
--

INSERT INTO `mba_contents` (`cid`, `zxjj`, `zzjg`, `jyln`, `mba_xm`, `edp_xm`, `xnds`, `xwds`, `hzqy`, `zsxx`, `pyfa`, `lwzd`, `glsj`, `kcap`, `dbap`, `zyfz`, `lhhzc`, `org`, `xyfc`, `lxwm`, `xwzx`, `tzgg`, `xxzs`, `xxjw`, `xzzx`, `yqlj`) VALUES
(1, '', '华中农业大学工商管理硕士教育指导委员会委员名单\r\n主任委员：\r\n李崇光 华中农业大学副校长、教授\r\n副主任委员：\r\n侯永旺 鄂尔多斯集团董事局董事 \r\n青 平 经济管理学院院长、教授 \r\n委    员：（以姓氏笔画为序）\r\n孙 剑 经济管理学院教授 \r\n李艳军 经济管理学院教授 \r\n严奉宪 经济管理学院教授 \r\n周德翼 经济管理学院教授  \r\n秘    书：余 戎', '愿景：打造中国一流、世界知名的MBA教育基地\r\n\r\n　　To become a leading provider of Chinese MBA education with a world-reknowed reputation\r\n\r\n　　使命：培养具有国际视野、兼备竞争意识与团队精神的中国工商管理精英\r\n\r\n　　To nurture a Chinese business elite with a global vision and an ertrepreneurial spirit through a combination of\r\n\r\n　　strong leadership and teamwork\r\n\r\n　　价值观：谋新求变  止于至善\r\n\r\n　　Knowledge,innovation,openness to change,striving for perfection', '华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n\r\n', '华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n', '我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。“十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。\r\n    我校相关教师国际交流合作频繁，具有从事MBA教育的国际化视野。近年来我校注重与国内外经济管理学术界的交流合作，美国、英国、加拿大、澳大利亚等国专家先后来我校经济管理学院讲学交流，我校先后派出20名教师赴美国、英国、澳大利亚等国家进行有关MBA、管理学方面的考察、进修或攻读学位，如蔡根女教授赴澳大利亚University of Melbourne进行农业企业管理学术访问；李崇光教授在美国Iowa State University商学院、University of Queensland进行农业企业工商管理硕士（MBA for Agribusiness）项目的学习；周德翼教授赴英国University of Sussex、荷兰Wageningen大学从事工商管理方面的合作研究，齐振宏教授赴英国City University进修工商管理，柳鹏程副教授在澳大利亚Sydney University、青平副教授在澳大利亚Monash University攻读农业经济学和商学硕士学位。教师的国际交流使得我校MBA教育的师资队伍能及时追踪国际MBA教育的发展动态，把最新的涉农企业、农业产业化的知识传授给MBA学员。\r\n    聘请的来自企业经营管理实践战线的兼职教师包括涉农企业的董事长、总裁等高层管理人员，他们都具有指导MBA学员的实践经验和知识水平。我校已聘请了湖北兴发集团、春都集团、福娃集团、宜化集团、襄樊正大、新华扬集团、上海新农饲料、深圳农产品有限公司、唐人神集团、海大集团、中国农产品交易股份有限公司（香港）等企业董事长、总裁等高层管理人员担任我校兼职教师。这些企业与我校建立了良好的合作关系，每年我校均有学生到这些企业进行教学实习，接受他们的指导。\r\n    聘请的兼职教授均具有较高的学术造诣和MBA指导经验。从国内外知名大学和科研机构聘请了一批兼职教授，如加拿大Brock University终身教授、MBA教育中心主任邓胜梁博士，澳大利亚University of Queensland供应链管理专家Ray Collins，美国国际食品政策研究所高级科学家游良志博士，台湾清华大学黄宗煌教授，中国驻联合国粮农组织国际贸易专家马有祥博士，国务院发展研究中心市场研究所国家贸易专家程国强博士，武汉大学经济与管理学院企业管理专家谭力文教授等。', '我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。“十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。\r\n    我校相关教师国际交流合作频繁，具有从事MBA教育的国际化视野。近年来我校注重与国内外经济管理学术界的交流合作，美国、英国、加拿大、澳大利亚等国专家先后来我校经济管理学院讲学交流，我校先后派出20名教师赴美国、英国、澳大利亚等国家进行有关MBA、管理学方面的考察、进修或攻读学位，如蔡根女教授赴澳大利亚University of Melbourne进行农业企业管理学术访问；李崇光教授在美国Iowa State University商学院、University of Queensland进行农业企业工商管理硕士（MBA for Agribusiness）项目的学习；周德翼教授赴英国University of Sussex、荷兰Wageningen大学从事工商管理方面的合作研究，齐振宏教授赴英国City University进修工商管理，柳鹏程副教授在澳大利亚Sydney University、青平副教授在澳大利亚Monash University攻读农业经济学和商学硕士学位。教师的国际交流使得我校MBA教育的师资队伍能及时追踪国际MBA教育的发展动态，把最新的涉农企业、农业产业化的知识传授给MBA学员。\r\n    聘请的来自企业经营管理实践战线的兼职教师包括涉农企业的董事长、总裁等高层管理人员，他们都具有指导MBA学员的实践经验和知识水平。我校已聘请了湖北兴发集团、春都集团、福娃集团、宜化集团、襄樊正大、新华扬集团、上海新农饲料、深圳农产品有限公司、唐人神集团、海大集团、中国农产品交易股份有限公司（香港）等企业董事长、总裁等高层管理人员担任我校兼职教师。这些企业与我校建立了良好的合作关系，每年我校均有学生到这些企业进行教学实习，接受他们的指导。\r\n    聘请的兼职教授均具有较高的学术造诣和MBA指导经验。从国内外知名大学和科研机构聘请了一批兼职教授，如加拿大Brock University终身教授、MBA教育中心主任邓胜梁博士，澳大利亚University of Queensland供应链管理专家Ray Collins，美国国际食品政策研究所高级科学家游良志博士，台湾清华大学黄宗煌教授，中国驻联合国粮农组织国际贸易专家马有祥博士，国务院发展研究中心市场研究所国家贸易专家程国强博士，武汉大学经济与管理学院企业管理专家谭力文教授等。', '', '华中农业大学是一所以农科为优势，以生命科学为特色，理、工、农、文、法、经、管等学科相结合的教育部直属全国重点大学，是“211工程”重点建设高校。校园位于武汉市南湖狮子山，占地面积7425亩（约5平方公里），校园三面环水，背靠青山，风景秀丽，环境幽雅，是理想的学习和科研园地。2009年经教育部和国务院学位委员会批准，我校获得全日制MBA教育试点单位资格，2010年起可面向全国招生。\r\n华中农业大学MBA教育中心依托于经济管理学院，该院师资力量雄厚，现有专任教师113人，其中博士生导师13人，教授20人，副教授35人，具有博士学位教师72人，聘请校外著名学者担任兼职教师36人；学院学科优势突出，现有农业经济管理、土地资源管理等博士学位授权点6个，企业管理、国际贸易等硕士学位授权点7个，其中农业经济管理二级学科为国家重点学科和湖北省优势学科，农林经济管理一级学科和土地资源管理二级学科为湖北省重点学科；学院科研实力强劲，下设农业经济管理系、土地管理系等6个系部，建有农林经济管理博士后科研流动站，设有湖北农村发展研究中心等10个研究机构及农业部经管总站华中农业大学农经服务中心，建有经济管理教学实验中心和土地资源管理教学实验中心，下设8个综合实验室。\r\n\r\n攻读华中农业大学工商管理硕士（MBA），将是您事业成功的起点！\r\n\r\n一、MBA报考条件：\r\n1．拥护中国共产党的领导，勤奋学习，愿意为社会主义现代化建设服务，品德良好，遵纪守法。\r\n2．大学本科毕业后有3年或3年以上工作经历；大专毕业后有5年或5年以上工作经历；已获硕士学位或博士学位并有2年或2年以上工作经历。\r\n3. 身体健康状况符合规定的体检标准。\r\n二、报考方式\r\n2011年全国硕士研究生招生考试报名仍采用网上报名与现场确认相结合的方式。所有考生在网上报名后均需在规定时间到报考点进行现场确认后报名信息方为有效。\r\n1．网报：考生须通过教育部指定网站（教育网址：http://yz.chsi.cn，公网网址：http://yz.chsi.com.cn）完成网上报名程序。时间为2010年10月10日—10月30日。（以教育部公布时间为准，逾期不再补报，也不得再修改报名信息。）\r\n2．现场确认：网报成功后考生本人需到选择的报考点进行现场确认报考信息、缴费、照像。（2010年11月10日—14日）\r\n3．现场工作流程：\r\n(1)验证→(2)缴费→(3)照相→(4)领取“信息卡”并校对签名→(5)交回“信息卡”→(6)报名结束\r\n未到现场缴费、照像、确认报名信息的考生，网报信息无效。\r\n三、注意事项\r\n1．考生在报名前请仔细核对本人条件是否符合报考要求，报考资格审查将在复试阶段进行。凡不符合报考条件的考生不予复试、录取。\r\n2．请考生仔细核对报名信息，报名信息为录取信息，姓名、身份证号、信息栏内选择的报考点、招生单位、专业等不能修改。考生自行承担以上失误造成的后果。\r\n3．考生选择报考点时要防止点击错误,一旦选定报考点就必须到该报考点缴费、照像、确认报名信息、参加考试。\r\n4．2011年1月1日-14日，考生凭网报用户名和密码登录中国研究生招生信息网（http://yz.chsi.com.cn/）下载打印《准考证》，招生单位不再给考生寄发《准考证》。\r\n    考生凭下载打印的《准考证》和本人有效身份证件参加初试。\r\n5．考生网报期间如需帮助，请致电0278728639。\r\n四、考试\r\n考试分初试和复试两个阶段。\r\n1．初试：\r\n（1）初试时间：2011年1月15日、16日，具体时间和考场见《准考证》。\r\n（2）考试科目：MBA联考英语、综合（数学、写作、逻辑）。\r\n（3）考试地点：考生报考点。\r\n2．复试：\r\n（1）复试时间：预计在2011年4月。\r\n（2）复试内容：\r\n①外语听力口语测试\r\n②以专业课笔试、综合面试等形式对考生的学科背景、基本素质、操作技能、思维能力、创新能力等进行考察。\r\n五、录取方式\r\n根据初试、复试成绩和对考生科研潜力、综合素质的考察结果，全面衡量考生各方面的表现，择优录取。\r\n六、培养\r\n1．学习方式：委托培养，周末上课或集中上课。\r\n2．学习年限：一般为2年。\r\n3．培养方向：中小企业管理、营销管理、供应链管理与食品安全控制、人力资源开发与管理。\r\n七、毕业及证书发放\r\n学习成绩合格，完成相关培养环节，通过学位论文答辩，经校学位评定委员会批准，授予工商管理硕士学位，同时颁发华中农业大学硕士研究生毕业证书。\r\n八、联系方式\r\n华中农业大学研究生处招生办公室\r\n地 址：湖北省武汉市洪山区狮子山 邮 编：430070\r\n电 话：（027）87280470\r\n联系人：张老师\r\n华中农业大学经济管理学院\r\n华中农业大学MBA教育中心\r\n电话：（027）87288717，87288639 传真： （027）87288639\r\n联系人：张老师  邹老师 ', '', '', '', '', '', '', '1', '2', '3', '邮箱：mba@mail.hzau.edu.cn\r\n联系电话：027-87282679\r\n联系人：宋丽波主任\r\n传真：027-87282973\r\n\r\n地址：湖北省武汉市洪山区南湖狮子山一号华中农业大学经济管理学院研究生教育中心  \r\n\r\n邮编：430070', '', '', '', '', '', ''),
(2, '中心简介', '组织机构', '教育理念', ' MBA项目', 'EDP项目', '校内导师', '校外导师', '合作企业', '招生信息', '培养方案', '论文指导', '管理实践', '课程安排', '答辩安排', '职业发展', '联合会章程', '组织机构', '校友风采', '联系我们', '新闻中心', '通知公告', '招生信息', '教务信息', '下载中心', '友情链接'),
(3, 'collapseOne', 'collapseOne', 'collapseOne', 'collapseTwo', 'collapseTwo', 'collapseThree', 'collapseThree', 'collapseThree', '', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', '', 'collapseFive', 'collapseFive', 'collapseFive', '', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero');

-- --------------------------------------------------------

--
-- 表的结构 `mba_home`
--

CREATE TABLE IF NOT EXISTS `mba_home` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `mba_home`
--

INSERT INTO `mba_home` (`hid`, `class`, `title`, `content`, `date`) VALUES
(1, '友情链接', '华农主页', 'http://www.hzau.edu.cn', '2016-03-31'),
(2, '友情链接', '研究生院', 'http://yjs.hzau.edu.cn/', '2016-03-31'),
(3, '友情链接', '中国研究生招生信息网', 'http://yz.chsi.com.cn/', '2016-03-31'),
(4, '友情链接', '百度', 'http://www.baidu.com', '2016-03-31'),
(7, '新闻中心', '2015年英国曼彻斯特城市大', 'hasdfffffffffffffffffffffffff', '2016-03-31'),
(8, '新闻中心', '6666666666666', '88888888888888', '2016-03-31'),
(9, '通知公告', '666666666666', '8888888888888', '2016-03-31'),
(10, '招生信息', '2015年英国曼彻斯特城市大学商学院MBA交流秋季项目启动', '66666666666', '2016-03-31'),
(11, '教务信息', '关于四六级考试的说明', '考生须知', '2016-03-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
