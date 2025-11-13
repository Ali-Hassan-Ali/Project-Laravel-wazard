# 🧭 Institutions & Activity Management System  
نظام إدارة المؤسسات والأنشطة الميدانية

## 📘 Overview | نظرة عامة
This project is a structured database and system design for managing **institutions, domains, members, work areas, and activities** — including activity paths, equipment, and member roles.  
يهدف هذا النظام إلى تنظيم عمل المؤسسات والمجالات التابعة لها، وإدارة المناطق وأعضاء الفرق والأنشطة الميدانية والمعدات بشكل دقيق ومرن.

---

## 🏛️ Tables Structure | هيكل الجداول

### 🏢 Institutions (المؤسسات)
| Column | Description |
|--------|-------------|
| name | Institution name |
| logo | Institution logo |
| website | Institution website |
| description | Institution description |

---

### 🌐 Domain (النطاق)
| Column | Description |
|--------|-------------|
| keyword | Unique keyword for domain |
| institution_id | Linked institution |
| name | Domain name |
| description | Domain description |

---

### 👥 Members (الأعضاء)
| Column | Description |
|--------|-------------|
| domain_id | Linked domain |
| workarea_id | Related work area |
| name | Member name |
| nid | National ID |
| rank | Rank or position |
| unit | Unit or department |
| status | Active / inactive |
| phone | Phone number |
| email | Email address |

---

### 🗺️ Area (المنطقة)
| Column | Description |
|--------|-------------|
| title | Area title |

---

### 🧩 WorkAreaType (نوع منطقة العمل)
| Column | Description |
|--------|-------------|
| user_id | Created by user |
| domain_id | Linked domain |
| title | Work area type name |
| description | Description |

---

### 🧭 WorkArea (منطقة العمل)
| Column | Description |
|--------|-------------|
| parent_id | Parent area |
| area_id | Related area |
| area_type_id | Work area type |
| title | Work area name |
| description | Description |
| location | Geographical location |
| status | Status (active/inactive) |

---

### 🧪 Samples (أنواع الأنشطة)
| Column | Description |
|--------|-------------|
| title | Sample title |
| user_id | Created by user |
| domain_id | Linked domain |
| description | Description |
| visibility | Public or private |

---

### 🚀 Activities (الأنشطة)
| Column | Description |
|--------|-------------|
| user_id | Created by user |
| sample_id | Linked sample |
| workarea_id | Related work area |
| start_at | Start time |
| end_at | End time |
| status | Activity status |
| slug | URL slug |

---

### 🛤️ Path (المسار)
| Column | Description |
|--------|-------------|
| user_id | Created by user |
| from | Start point |
| to | End point |
| workarea | Related work area |
| start_at | Start time |
| end_at | End time |
| status | Path status |
| bio | Description or notes |

---

### 🔗 Activity Path (مسار النشاط)
| Column | Description |
|--------|-------------|
| path_id | Linked path |
| activity_id | Linked activity |
| skippable | Can be skipped or not |

---

### ⚙️ ActivityPathEquipment (معدات مسار النشاط)
| Column | Description |
|--------|-------------|
| equipment_id | Linked equipment |
| activity_path_id | Linked activity path |
| amount | Equipment quantity |

---

### 🧍 MemberRoles (أدوار الأعضاء)
| Column | Description |
|--------|-------------|
| domain_id | Linked domain |
| title | Role title |
| descriptions | Role description |

---

### 👥 ActivityPathMember (أعضاء مسار النشاط)
| Column | Description |
|--------|-------------|
| member_id | Linked member |
| activity_path_id | Linked activity path |
| member_role_id | Linked member role |

---

### 🧰 ActivityPathMemberEquipment (معدات عضو مسار النشاط)
| Column | Description |
|--------|-------------|
| activity_path_member_id | Linked activity path member |
| member_id | Linked member |
| equipment_id | Linked equipment |

---

### 🧾 ActivityPathMemberEquipmentProperties (خصائص معدات عضو مسار النشاط)
| Column | Description |
|--------|-------------|
| activity_path_member_id | Linked path member |
| label | Property label |
| value | Property value |
| is_unique | Unique constraint |
| is_nullable | Nullable or required |
| type | Data type |
| info | Additional info |
| activity_path_member_equipment_id | Linked equipment record |

---

### 🧱 Equipment (المعدات)
| Column | Description |
|--------|-------------|
| title | Equipment name |
| info | Equipment details |
| equipment_type_id | Equipment type |

---

### ⚙️ EquipmentPropertie (خصائص المعدات)
| Column | Description |
|--------|-------------|
| equipment_id | Linked equipment |
| key | Property key |
| label | Label name |
| value | Default or assigned value |
| is_unique | Unique property |
| is_nullable | Nullable or required |
| type | Data type |
| info | Description |

---

### 🧑‍💼 UserRole (دور المستخدم)
| Column | Description |
|--------|-------------|
| title | Role title |
| description | Role description |

---

## 🧠 Summary
This structure provides full flexibility to manage:
- Institutions and their domains  
- Members, roles, and work areas  
- Activities, paths, and associated equipment  
- Dynamic relationships between users, equipment, and activities  

---

## 🧩 Tech Stack (اقتراح للتنفيذ)
- **Backend:** Laravel 11  
- **Database:** MySQL  
- **Frontend:** Blade / Vue / React  
- **Version Control:** Git & GitHub  

---

## 📄 License
This project is open-source and available under the [MIT License](LICENSE).
