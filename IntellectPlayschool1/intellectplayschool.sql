create table academic_commstat
(
    acad_CommStat int          not null
        primary key,
    description   varchar(100) null
);

create table academic_intellitype
(
    acad_IntelliType int          not null
        primary key,
    description      varchar(100) null
);

create table academic_prog
(
    acad_Prog   int          not null
        primary key,
    description varchar(100) null
);

create table academic_subcomm
(
    acad_SubComm varchar(100) not null
        primary key,
    description  varchar(100) null
);

create table academic_subname
(
    acad_SubName int          not null
        primary key,
    description  varchar(100) null
);

create table academic_subnametype
(
    acad_SubNameType int          not null
        primary key,
    description      varchar(100) null
);

create table academic_vaktype
(
    acad_VAKType int          not null
        primary key,
    description  varchar(100) null
);

create table account
(
    acc_ID       int auto_increment
        primary key,
    acc_pwd      varchar(50) not null,
    fName        char        not null,
    mName        char        null,
    lName        char        not null,
    acc_Address  varchar(50) not null,
    acc_PhoneNo  int         not null,
    acc_Email    varchar(40) null,
    acc_Category int         null
);

create index account_acc_Category_index
    on account (acc_Category);

create table account_category
(
    acc_Category  int         not null
        primary key,
    category_Desc varchar(20) not null,
    constraint account_category_account_acc_Category_fk
        foreign key (acc_Category) references account (acc_Category)
);

create table announcement_category
(
    announce_Category int         not null
        primary key,
    category_Desc     varchar(50) null
);

create table announcement_type
(
    announce_Type int         not null
        primary key,
    type_Desc     varchar(20) null
);

create table attendance_confirmation_desc
(
    att_Confirmation  int         not null
        primary key,
    confirmation_Desc varchar(20) not null
);

create table attendance_rtkstatus_desc
(
    att_RTKstatus  int         not null
        primary key,
    RTKstatus_desc varchar(20) not null
);

create table attendance_type_desc
(
    att_Type  int         not null
        primary key,
    type_Desc varchar(20) not null
);

create table attendance_user_desc
(
    att_User  int         not null
        primary key,
    user_Desc varchar(20) not null
);

create table attendance
(
    att_ID           int auto_increment
        primary key,
    att_User         int      not null,
    att_Date         date     null,
    att_Type         int      not null,
    att_Reason       int      null,
    att_RTKstatus    int      null,
    att_RTKmedia     longblob null,
    att_Confirmation int      null,
    acc_ID           int      null,
    constraint attendance_attendance_confirmation_desc_att_confirmation_fk
        foreign key (att_Confirmation) references attendance_confirmation_desc (att_Confirmation),
    constraint attendance_attendance_rtkstatus_desc_att_RTKstatus_fk
        foreign key (att_RTKstatus) references attendance_rtkstatus_desc (att_RTKstatus),
    constraint attendance_attendance_type_desc_att_Type_fk
        foreign key (att_Type) references attendance_type_desc (att_Type),
    constraint attendance_attendance_user_desc_att_User_fk
        foreign key (att_User) references attendance_user_desc (att_User)
);

create table parent
(
    acc_ID       int         not null
        primary key,
    p_Occupation varchar(40) not null,
    p_SalarySlip longblob    not null,
    acc_Category int         null,
    constraint Parent_account_acc_ID_fk
        foreign key (acc_ID) references account (acc_ID),
    constraint parent_account_acc_Category_fk
        foreign key (acc_Category) references account (acc_Category)
);

create table student_allergy
(
    s_Allergy    int         not null
        primary key,
    allergy_Desc varchar(20) not null
);

create table student_diapers
(
    s_DStatus int         not null
        primary key,
    s_DDesc   varchar(20) not null
);

create table student
(
    s_ID          int auto_increment
        primary key,
    fName         varchar(20) not null,
    mName         varchar(20) null,
    lName         varchar(20) not null,
    s_myKid       int         null,
    s_BCert       int         null,
    s_DOB         date        not null,
    s_Allergy     int         not null,
    s_AllergyDesc varchar(40) null,
    s_favFood     varchar(30) null,
    s_favColor    varchar(20) null,
    s_favToys     varchar(30) null,
    s_DStatus     int         not null,
    acc_ID        int         null,
    constraint student___fk
        foreign key (s_Allergy) references student_allergy (s_Allergy),
    constraint student_parent_acc_ID_fk
        foreign key (acc_ID) references parent (acc_ID),
    constraint student_student_diapers_s_DStatus_fk
        foreign key (s_DStatus) references student_diapers (s_DStatus)
);

create table academic_fk
(
    acad_ID       int  not null
        primary key,
    s_ID          int  null,
    acad_Prog     int  null,
    acad_CommDate date null,
    acad_CommStat int  null,
    constraint academic_fk_academic_commstat_acad_CommStat_fk
        foreign key (acad_CommStat) references academic_commstat (acad_CommStat),
    constraint academic_fk_academic_prog_acad_Prog_fk
        foreign key (acad_Prog) references academic_prog (acad_Prog),
    constraint academic_fk_student_s_ID_fk
        foreign key (s_ID) references student (s_ID)
);

create table academic_fk_intelligent
(
    acad_ID          int           not null
        primary key,
    acad_IntelliType int           null,
    acad_IntelliComm varchar(3000) null,
    constraint academic_fk_intelligent_academic_fk_acad_ID_fk
        foreign key (acad_ID) references academic_fk (acad_ID),
    constraint academic_fk_intelligent_academic_intellitype_acad_IntelliType_fk
        foreign key (acad_IntelliType) references academic_intellitype (acad_IntelliType)
);

create table academic_fk_subject
(
    acad_ID          int          not null
        primary key,
    acad_SubName     int          null,
    acad_SubNameType int          null,
    acad_SubComm     varchar(100) null,
    constraint academic_fk_subject_academic_fk_acad_ID_fk
        foreign key (acad_ID) references academic_fk (acad_ID),
    constraint academic_fk_subject_academic_subcomm_acad_SubComm_fk
        foreign key (acad_SubComm) references academic_subcomm (acad_SubComm),
    constraint academic_fk_subject_academic_subname_acad_SubName_fk
        foreign key (acad_SubName) references academic_subname (acad_SubName),
    constraint academic_fk_subject_academic_subnametype_acad_SubNameType_fk
        foreign key (acad_SubNameType) references academic_subnametype (acad_SubNameType)
);

create table academic_fk_vak
(
    acad_ID      int           not null
        primary key,
    acad_VAKType int           null,
    acad_VAKComm varchar(3000) null,
    constraint academic_fk_vak_academic_fk_acad_ID_fk
        foreign key (acad_ID) references academic_fk (acad_ID),
    constraint academic_fk_vak_academic_vaktype_acad_VAKType_fk
        foreign key (acad_VAKType) references academic_vaktype (acad_VAKType)
);

create table academic_le
(
    acad_ID       int auto_increment
        primary key,
    s_ID          int  not null,
    acad_Prog     int  null,
    acad_commDate date null,
    acad_CommStat int  null,
    constraint academic_LE_student_s_ID_fk
        foreign key (s_ID) references student (s_ID),
    constraint academic_le_academic_commstat_acad_CommStat_fk
        foreign key (acad_CommStat) references academic_commstat (acad_CommStat),
    constraint academic_le_academic_prog_acad_Prog_fk
        foreign key (acad_Prog) references academic_prog (acad_Prog)
);

create table academic_le_intelligent
(
    acad_ID          int           not null
        primary key,
    acad_IntelliType int           null,
    acad_IntelliComm varchar(3000) null,
    constraint academic_le_intelligent_academic_intellitype_acad_IntelliType_fk
        foreign key (acad_IntelliType) references academic_intellitype (acad_IntelliType),
    constraint academic_le_intelligent_academic_le_acad_ID_fk
        foreign key (acad_ID) references academic_le (acad_ID)
);

create table academic_le_vak
(
    acad_ID      int           not null
        primary key,
    acad_VAKType int           null,
    acad_VAKComm varchar(3000) null,
    constraint academic_le_vak_academic_le_acad_ID_fk
        foreign key (acad_ID) references academic_le (acad_ID),
    constraint academic_le_vak_academic_vaktype_acad_VAKType_fk
        foreign key (acad_VAKType) references academic_vaktype (acad_VAKType)
);

create table attendance_updating
(
    s_ID   int null,
    att_ID int not null
        primary key,
    acc_ID int null,
    constraint attendance_updating_attendance_att_ID_fk
        foreign key (att_ID) references attendance (att_ID),
    constraint attendance_updating_parent_acc_ID_fk
        foreign key (acc_ID) references parent (acc_ID),
    constraint attendance_updating_student_s_ID_fk
        foreign key (s_ID) references student (s_ID)
);

create table student_fee_category
(
    fee_Category     int not null
        primary key,
    fee_CategoryDesc int null
);

create table student_fee_status
(
    fee_status     int not null
        primary key,
    fee_StatusDesc int null
);

create table student_fee
(
    feeID        int auto_increment
        primary key,
    s_ID         int      not null,
    fee_Category int      null,
    fee_Status   int      null,
    fee_Receipt  longblob null,
    fee_Total    int      null,
    constraint student_fee_student_fee_category_fee_Category_fk
        foreign key (fee_Category) references student_fee_category (fee_Category),
    constraint student_fee_student_fee_status_fee_status_fk
        foreign key (fee_Status) references student_fee_status (fee_status),
    constraint student_fee_student_s_ID_fk
        foreign key (s_ID) references student (s_ID)
);

create table teacher
(
    acc_ID       int not null
        primary key,
    acc_Category int null,
    constraint teacher_account_acc_Category_fk
        foreign key (acc_Category) references account (acc_Category),
    constraint teacher_account_acc_ID_fk
        foreign key (acc_ID) references account (acc_ID)
);

create table academic_subnameteacher
(
    acad_SubNameTeacher int not null
        primary key,
    acc_ID              int null,
    constraint academic_SubNameTeacher_teacher_acc_ID_fk
        foreign key (acc_ID) references teacher (acc_ID)
);

create table announcement
(
    announce_ID       int auto_increment
        primary key,
    announce_Type     int          null,
    acc_ID            int          null,
    announce_Category int          null,
    announce_Title    varchar(50)  null,
    announce_Media    longblob     null,
    announce_Desc     varchar(200) null,
    announce_Time     timestamp    null,
    announce_Start    date         null,
    announce_End      date         null,
    constraint announcement_announcement_category_announce_Category_fk
        foreign key (announce_Category) references announcement_category (announce_Category),
    constraint announcement_announcement_type_announce_Type_fk
        foreign key (announce_Type) references announcement_type (announce_Type),
    constraint announcement_teacher_acc_ID_fk
        foreign key (acc_ID) references teacher (acc_ID)
);

create table teacher_salary
(
    acc_ID           int  not null
        primary key,
    salaryDate       date null,
    defaultSalary    int  null,
    overtimeTotal    int  null,
    allowanceTotal   int  null,
    replacementTotal int  null,
    totalSalary      int  null,
    constraint Salary_teacher_acc_ID_fk
        foreign key (acc_ID) references teacher (acc_ID)
);

create index Salary_salaryDate_index
    on teacher_salary (salaryDate);

create table teacher_salary_allowance
(
    acc_ID         int  not null
        primary key,
    playgroundDate date null,
    constraint teacher_salary_allowance_teacher_salary_acc_ID_fk
        foreign key (acc_ID) references teacher_salary (acc_ID)
);

create table teacher_salary_overtime
(
    acc_ID       int  not null
        primary key,
    overtimeDate date null,
    overtimeHour int  null,
    constraint teacher_salary_overtime_teacher_salary_acc_ID_fk
        foreign key (acc_ID) references teacher_salary (acc_ID)
);

create table teacher_salary_replacement
(
    acc_ID          int  not null
        primary key,
    replacementDate date null,
    constraint teacher_salary_replacement_teacher_salary_acc_ID_fk
        foreign key (acc_ID) references teacher_salary (acc_ID)
);


