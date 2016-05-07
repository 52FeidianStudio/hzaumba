-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-07 16:11:32
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `mba_contents`
--

INSERT INTO `mba_contents` (`cid`, `zxjj`, `zzjg`, `jyln`, `mba_xm`, `edp_xm`, `xnds`, `xwds`, `hzqy`, `zsxx`, `pyfa`, `lwzd`, `glsj`, `kcap`, `dbap`, `zyfz`, `lhhzc`, `org`, `xyfc`, `lxwm`, `xwzx`, `tzgg`, `xxzs`, `xxjw`, `xzzx`, `yqlj`) VALUES
(1, '', '&lt;p style=&quot;text-align: center; margin-bottom: 15px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;span style=&quot;font-size: 18px; color: rgb(84, 141, 212);&quot;&gt;华中农业大学工商管理硕士教育指导委员会委员名单&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;主任委员： &amp;nbsp;&amp;nbsp; 李崇光 华中农业大学副校长、教授&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;副主任委员： 侯永旺 鄂尔多斯集团董事局董事&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 青 &amp;nbsp; 平 经济管理学院院长、教授&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;委 &amp;nbsp; &amp;nbsp;员：（以姓氏笔画为序）&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 孙&amp;nbsp;&amp;nbsp; 剑 经济管理学院教授&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 李艳军 经济管理学院教授&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 严奉宪 经济管理学院教授&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 周德翼 经济管理学院教授 &amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-left:84px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;秘 &amp;nbsp; &amp;nbsp;&amp;nbsp;书：&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 余 戎 &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;愿景：打造中国一流、世界知名的MBA教育基地\r\n\r\n　　&lt;/p&gt;&lt;p&gt;To become a leading provider of Chinese MBA education with a world-reknowed reputation\r\n\r\n　　&lt;/p&gt;&lt;p&gt;使命：培养具有国际视野、兼备竞争意识与团队精神的中国工商管理精英\r\n\r\n　　&lt;/p&gt;&lt;p&gt;To nurture a Chinese business elite with a global vision and an ertrepreneurial spirit through a combination of strong leadership and teamwork\r\n\r\n　　&lt;/p&gt;&lt;p&gt;价值观：谋新求变 &amp;nbsp;止于至善\r\n\r\n　　&lt;/p&gt;&lt;p&gt;Knowledge,innovation,openness to change,striving for perfection &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 &lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n\r\n &amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;/p&gt;', '华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; “十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。 &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。“十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。\r\n    我校相关教师国际交流合作频繁，具有从事MBA教育的国际化视野。近年来我校注重与国内外经济管理学术界的交流合作，美国、英国、加拿大、澳大利亚等国专家先后来我校经济管理学院讲学交流，我校先后派出20名教师赴美国、英国、澳大利亚等国家进行有关MBA、管理学方面的考察、进修或攻读学位，如蔡根女教授赴澳大利亚University of Melbourne进行农业企业管理学术访问；李崇光教授在美国Iowa State University商学院、University of Queensland进行农业企业工商管理硕士（MBA for Agribusiness）项目的学习；周德翼教授赴英国University of Sussex、荷兰Wageningen大学从事工商管理方面的合作研究，齐振宏教授赴英国City University进修工商管理，柳鹏程副教授在澳大利亚Sydney University、青平副教授在澳大利亚Monash University攻读农业经济学和商学硕士学位。教师的国际交流使得我校MBA教育的师资队伍能及时追踪国际MBA教育的发展动态，把最新的涉农企业、农业产业化的知识传授给MBA学员。\r\n    聘请的来自企业经营管理实践战线的兼职教师包括涉农企业的董事长、总裁等高层管理人员，他们都具有指导MBA学员的实践经验和知识水平。我校已聘请了湖北兴发集团、春都集团、福娃集团、宜化集团、襄樊正大、新华扬集团、上海新农饲料、深圳农产品有限公司、唐人神集团、海大集团、中国农产品交易股份有限公司（香港）等企业董事长、总裁等高层管理人员担任我校兼职教师。这些企业与我校建立了良好的合作关系，每年我校均有学生到这些企业进行教学实习，接受他们的指导。\r\n    聘请的兼职教授均具有较高的学术造诣和MBA指导经验。从国内外知名大学和科研机构聘请了一批兼职教授，如加拿大Brock University终身教授、MBA教育中心主任邓胜梁博士，澳大利亚University of Queensland供应链管理专家Ray Collins，美国国际食品政策研究所高级科学家游良志博士，台湾清华大学黄宗煌教授，中国驻联合国粮农组织国际贸易专家马有祥博士，国务院发展研究中心市场研究所国家贸易专家程国强博士，武汉大学经济与管理学院企业管理专家谭力文教授等。', '', '华中农业大学是一所以农科为优势，以生命科学为特色，理、工、农、文、法、经、管等学科相结合的教育部直属全国重点大学，是“211工程”重点建设高校。校园位于武汉市南湖狮子山，占地面积7425亩（约5平方公里），校园三面环水，背靠青山，风景秀丽，环境幽雅，是理想的学习和科研园地。2009年经教育部和国务院学位委员会批准，我校获得全日制MBA教育试点单位资格，2010年起可面向全国招生。\r\n华中农业大学MBA教育中心依托于经济管理学院，该院师资力量雄厚，现有专任教师113人，其中博士生导师13人，教授20人，副教授35人，具有博士学位教师72人，聘请校外著名学者担任兼职教师36人；学院学科优势突出，现有农业经济管理、土地资源管理等博士学位授权点6个，企业管理、国际贸易等硕士学位授权点7个，其中农业经济管理二级学科为国家重点学科和湖北省优势学科，农林经济管理一级学科和土地资源管理二级学科为湖北省重点学科；学院科研实力强劲，下设农业经济管理系、土地管理系等6个系部，建有农林经济管理博士后科研流动站，设有湖北农村发展研究中心等10个研究机构及农业部经管总站华中农业大学农经服务中心，建有经济管理教学实验中心和土地资源管理教学实验中心，下设8个综合实验室。\r\n\r\n攻读华中农业大学工商管理硕士（MBA），将是您事业成功的起点！\r\n\r\n一、MBA报考条件：\r\n1．拥护中国共产党的领导，勤奋学习，愿意为社会主义现代化建设服务，品德良好，遵纪守法。\r\n2．大学本科毕业后有3年或3年以上工作经历；大专毕业后有5年或5年以上工作经历；已获硕士学位或博士学位并有2年或2年以上工作经历。\r\n3. 身体健康状况符合规定的体检标准。\r\n二、报考方式\r\n2011年全国硕士研究生招生考试报名仍采用网上报名与现场确认相结合的方式。所有考生在网上报名后均需在规定时间到报考点进行现场确认后报名信息方为有效。\r\n1．网报：考生须通过教育部指定网站（教育网址：http://yz.chsi.cn，公网网址：http://yz.chsi.com.cn）完成网上报名程序。时间为2010年10月10日—10月30日。（以教育部公布时间为准，逾期不再补报，也不得再修改报名信息。）\r\n2．现场确认：网报成功后考生本人需到选择的报考点进行现场确认报考信息、缴费、照像。（2010年11月10日—14日）\r\n3．现场工作流程：\r\n(1)验证→(2)缴费→(3)照相→(4)领取“信息卡”并校对签名→(5)交回“信息卡”→(6)报名结束\r\n未到现场缴费、照像、确认报名信息的考生，网报信息无效。\r\n三、注意事项\r\n1．考生在报名前请仔细核对本人条件是否符合报考要求，报考资格审查将在复试阶段进行。凡不符合报考条件的考生不予复试、录取。\r\n2．请考生仔细核对报名信息，报名信息为录取信息，姓名、身份证号、信息栏内选择的报考点、招生单位、专业等不能修改。考生自行承担以上失误造成的后果。\r\n3．考生选择报考点时要防止点击错误,一旦选定报考点就必须到该报考点缴费、照像、确认报名信息、参加考试。\r\n4．2011年1月1日-14日，考生凭网报用户名和密码登录中国研究生招生信息网（http://yz.chsi.com.cn/）下载打印《准考证》，招生单位不再给考生寄发《准考证》。\r\n    考生凭下载打印的《准考证》和本人有效身份证件参加初试。\r\n5．考生网报期间如需帮助，请致电0278728639。\r\n四、考试\r\n考试分初试和复试两个阶段。\r\n1．初试：\r\n（1）初试时间：2011年1月15日、16日，具体时间和考场见《准考证》。\r\n（2）考试科目：MBA联考英语、综合（数学、写作、逻辑）。\r\n（3）考试地点：考生报考点。\r\n2．复试：\r\n（1）复试时间：预计在2011年4月。\r\n（2）复试内容：\r\n①外语听力口语测试\r\n②以专业课笔试、综合面试等形式对考生的学科背景、基本素质、操作技能、思维能力、创新能力等进行考察。\r\n五、录取方式\r\n根据初试、复试成绩和对考生科研潜力、综合素质的考察结果，全面衡量考生各方面的表现，择优录取。\r\n六、培养\r\n1．学习方式：委托培养，周末上课或集中上课。\r\n2．学习年限：一般为2年。\r\n3．培养方向：中小企业管理、营销管理、供应链管理与食品安全控制、人力资源开发与管理。\r\n七、毕业及证书发放\r\n学习成绩合格，完成相关培养环节，通过学位论文答辩，经校学位评定委员会批准，授予工商管理硕士学位，同时颁发华中农业大学硕士研究生毕业证书。\r\n八、联系方式\r\n华中农业大学研究生处招生办公室\r\n地 址：湖北省武汉市洪山区狮子山 邮 编：430070\r\n电 话：（027）87280470\r\n联系人：张老师\r\n华中农业大学经济管理学院\r\n华中农业大学MBA教育中心\r\n电话：（027）87288717，87288639 传真： （027）87288639\r\n联系人：张老师  邹老师 ', '', '', '', '', '', '', '', '', '3', '&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;邮箱：mba@mail.hzau.edu.cn &lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;联系电话：027-87282679&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;联系人：宋丽波主任 &lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;传真：027-87282973 &lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;地址：湖北省武汉市洪山区南湖狮子山一号华中农业大学经济管理学院研究生教育中心 &amp;nbsp; &lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;邮编：430070 &amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;br/&gt;&lt;/p&gt;', '', '', '', '', '', ''),
(2, '中心简介', '组织机构', '教育理念', ' MBA项目', 'EDP项目', '校内导师', '校外导师', '合作企业', '招生信息', '培养方案', '论文指导', '管理实践', '课程安排', '答辩安排', '职业发展', '联合会章程', '组织机构', '校友风采', '联系我们', '新闻中心', '通知公告', '招生信息', '教务信息', '下载中心', '友情链接'),
(3, 'collapseOne', 'collapseOne', 'collapseOne', 'collapseTwo', 'collapseTwo', 'collapseThree', 'collapseThree', 'collapseThree', '', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', '', 'collapseFive', 'collapseFive', 'collapseFive', '', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero');

-- --------------------------------------------------------

--
-- 表的结构 `mba_home`
--

CREATE TABLE IF NOT EXISTS `mba_home` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

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
(11, '教务信息', '关于四六级考试的说明', '考生须知', '2016-03-31'),
(13, '下载中心', '第二个上传文件', '56fcfc6b1f031.jpg', '2016-03-31'),
(14, '下载中心', '第三个上传文', '56fcfe131af48.jpg', '2016-03-31'),
(17, '新闻中心', '女子与宋仲基&quot;结婚领证&quot; 父亲大骂:哪个同意的', '李小姐和宋仲基的“结婚证”\r\n\r\n    韩剧《太阳的后裔》火遍全国，男主角宋仲基一度成为热门话题，甚至成为众多女性心目中的“新任老公”，他的白衬衫登记照也被网友恶搞，大家ps上自己的头像与宋仲基领“结婚证照”。26岁的李小姐也效仿ps上自己头像，并在网络上晒出“结婚证”，可结果并未娱乐他人，反而激怒了父亲……\r\n\r\n    晒与宋仲基的“结婚证照”，还开玩笑称“年底就办席”\r\n\r\n    最近韩剧《太阳的后裔》大火，男主角宋仲基的照片几乎刷屏朋友圈。清明节，从事策划工作的26岁李小姐趁着放假，一个人在巴蜀城6栋的家中耍手机。她并不“哈韩”，也没有追剧，只不过看见网上疯传“宋仲基的白衬衫登记照”，觉得好玩，便参与进来。\r\n\r\n    她拜托大学同学帮忙，将自己的登记照与宋仲基的ps在一起，然后将两人照片ps在结婚证上面。经过同学帮忙修正过的“结婚证照”，晃眼看上去，就像真的一样。\r\n\r\n    看见朋友们也在晒发此类ps照片，李小姐没觉得不妥，便在微信圈发了这条动态。“我当时还在想，大家都知道宋仲基，估计大家都会觉得好耍。”\r\n\r\n    李小姐的一位姐姐转发了李小姐的这条信息，还开玩笑地问她什么时候办酒席，她爽快地回复这个玩笑话：今年就要办席，你要来韩国参加婚礼哟。\r\n\r\n    出乎李小姐的意料，这位姐姐添加了李小姐爸爸的微信号，她们的对话全被李爸爸看见了。\r\n\r\n    爸爸发怒打电话痛骂\r\n\r\n    解释半小时才搞明白\r\n\r\n    李小姐的爸爸在垫江老家。看见对话后，马上给女儿打来电话：哪个同意你结婚的？你居然瞒到我扯了证？这个男的是哪里的？……\r\n\r\n    被爸爸劈头盖脸的一骂，李小姐蒙了一阵才反应过来，解释了大半天，还教爸爸上网搜索“宋仲基”和《太阳的后裔》等字样，爸爸搜索之后看见了新闻，这才没有怪她。\r\n\r\n    不过，这个事情让这位父亲真正紧张了一把，他事后还找女儿谈心，再三说：“你是我的宝贝女儿，不要瞒着我们偷户口本结婚哈，做什么事情都要三思而后行。”\r\n\r\n    这次“结婚”乌龙事件，不仅吓到了爸爸，就连认识的朋友们，也有被吓到的。昨日，在重庆人文科技学院中文专业读大四的朋友杰杰接受记者采访。“我们年轻人都知道宋仲基是谁，不过她这个图片ps太像真的了，那些上了年纪的朋友不知道这个梗的，就会紧张，怎么这么突然就结婚了。”\r\n\r\n    清明节这几天，李小姐都陷在这个事情里，面对有人私聊微信恭喜她新婚快乐、或是有人夸她这个男的好帅之类的关系话，李小姐都一一做出了解释，好不容易才消停了。', '2016-04-05'),
(18, '友情链接', 'bootstrap中文网', 'http://www.bootcss.com/', '2016-04-05'),
(20, '下载中心', '西安', '5703d2ffe3b2a.txt', '2016-04-05'),
(21, '下载中心', '微信', '5703d30dbb848.txt', '2016-04-05'),
(22, '下载中心', '哈哈', '33', '2016-04-06'),
(23, '下载中心', '66', '66', '0000-00-00'),
(24, '下载中心', '3', '234', '0000-00-00'),
(25, '下载中心', '爱人', 'saffron', '0000-00-00'),
(26, '下载中心', '啥的', 'Sd', '0000-00-00'),
(27, '下载中心', '放', '撒', '0000-00-00'),
(30, '首页图片', '', '570f6c6a00dd9.jpg', '2016-04-14'),
(31, '首页图片', '', '570f6c8381802.jpg', '2016-04-14'),
(34, '合作企业', 'http://baidu.com', '570f6d11a6a86.jpg', '2016-04-14'),
(36, '首页图片', 'http://localhost/hzaumba/index.php/Home/Index/information.html?hid=17', '5710811a7005a.jpg', '2016-04-15'),
(37, '合作企业', 'http://localhost/phpmyadmin/#PMAURL-4:tbl_structure.php?db=hzaumba&amp;table=mba_home&amp;server=1&amp;target=&amp;token=104f642fe12f9ac5e8714624bbc9e155', '57108135ab9fd.jpg', '2016-04-15'),
(38, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(39, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(40, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(41, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(42, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(43, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(44, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(45, '新闻中心', 'test', '&lt;p&gt;test&lt;/p&gt;', '2016-05-07'),
(46, '新闻中心', '朝鲜官媒:劳动党30多年坚定守护社会主义', '&lt;p&gt;朝鲜劳动党第七次全国代表大会6日在平壤4·25文化会馆开幕。这是朝鲜劳动党时隔30余年再次召开全国代表大会。&lt;/p&gt;&lt;p&gt;4·25文化会馆外墙上挂着朝鲜劳动党党旗，楼顶矗立着党徽。当天共有110余名多国记者到会场附近报道会议，其中包括来自美国、日本等国的记者。&lt;/p&gt;&lt;p&gt;当天上午，朝鲜中央电视台播放了回顾朝鲜劳动党一大至六大的纪录片。&lt;/p&gt;&lt;p&gt;朝\r\n鲜劳动党机关报《劳动新闻》6日发表社论说，过去30多年朝鲜劳动党在历史狂风中坚定守护了人民生命和社会主义，成功开辟了朝鲜式的、用自己力量发展社会\r\n主义强盛繁荣的道路。社论强调，通过这次大会，朝鲜劳动党将把全党更加坚定地转变成与金正恩同志思想一致，同呼吸、同步伐的有机整体，更好地完成社会主义\r\n伟业。&lt;/p&gt;&lt;p&gt;朝鲜劳动党成立于1945年10月10日，迄今已召开过6次全国代表大会。第六次全国代表大会于1980年10月召开。&lt;/p&gt;&lt;p&gt;朝鲜劳动党第七次全国代表大会6日在平壤开幕。当天下午，朝方安排100多名外国记者参观平壤3·26电线工厂生产一线，向世界展示朝鲜充分发挥自力更生精神加快生产、创造“万里马速度”的面貌。&lt;/p&gt;&lt;p&gt;平壤3·26电线工厂由时任朝鲜最高领导人金日成于1958年11月19日选址，1962年正式开始生产作业。1968年3月26日，金日成和金正日共同参观该厂，为了纪念这一天，该电线厂被命名为3·26电线工厂。&lt;/p&gt;&lt;p&gt;厂长金石男介绍，该工厂目前有6个大的生产车间和1个分工厂，生产各种型号和规格的电线、电缆，提供给朝鲜全国重要建设工地。&lt;/p&gt;&lt;p&gt;金石男说，工厂每年大约生产2万吨线缆，绝大部分用来满足国内各单位的使用需求，仅有一小部分出口东南亚等地。工厂现有员工1000多名，其中女性占30％。&lt;/p&gt;&lt;p&gt;金石男表示，工人们为了迎接劳动党七大的胜利召开，积极响应“70天战斗”的号召，正在积极创造“万里马速度”，大幅提高生产效率，热火朝天抓紧生产，今年生产量达到了去年同期的2倍。&lt;/p&gt;&lt;p&gt;在生产车间，工人们身着统一的蓝色制服，一丝不苟地进行生产活动。“工人的成绩就是工厂的成绩，工厂的成绩也就是国家的成果，”金石男说。&lt;/p&gt;&lt;p&gt;在该工厂工作了16年的工人黄哲国对新华社记者说，在“70天战斗”中，通过加班加点和技术革新提高了产量，将把生产成果作为献给劳动党七大的礼物。&lt;/p&gt;&lt;p&gt;为了纪念去年10月劳动党建党70周年，工厂新建了包括理发室、游泳馆、健身房、电子阅览室、员工食堂等各项生活福利设施的综合楼，取名为“文明院”。该楼于今年1月正式向工厂员工开放。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2016-05-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
