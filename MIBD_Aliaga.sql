PGDMP         (            	    {            MIBD_Aliaga    15.4    15.4                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16912    MIBD_Aliaga    DATABASE     �   CREATE DATABASE "MIBD_Aliaga" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE "MIBD_Aliaga";
                inf324    false            �            1259    16943    administrador    TABLE     �   CREATE TABLE public.administrador (
    ci character varying(20),
    id_admin integer NOT NULL,
    usuario character varying(25),
    "contraseña" character varying(25),
    email character varying(50),
    color character varying(20)
);
 !   DROP TABLE public.administrador;
       public         heap    postgres    false            �            1259    16942    administrador_id_admin_seq    SEQUENCE     �   CREATE SEQUENCE public.administrador_id_admin_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.administrador_id_admin_seq;
       public          postgres    false    220                       0    0    administrador_id_admin_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.administrador_id_admin_seq OWNED BY public.administrador.id_admin;
          public          postgres    false    219            �            1259    16931    docente    TABLE     �   CREATE TABLE public.docente (
    ci character varying(20),
    id_doc integer NOT NULL,
    usuario character varying(25),
    "contraseña" character varying(25),
    email character varying(50),
    color character varying(20)
);
    DROP TABLE public.docente;
       public         heap    postgres    false            �            1259    16930    docente_id_doc_seq    SEQUENCE     �   CREATE SEQUENCE public.docente_id_doc_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.docente_id_doc_seq;
       public          postgres    false    218                       0    0    docente_id_doc_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.docente_id_doc_seq OWNED BY public.docente.id_doc;
          public          postgres    false    217            �            1259    16919 
   estudiante    TABLE       CREATE TABLE public.estudiante (
    ci character varying(20),
    matricula integer NOT NULL,
    usuario character varying(25),
    "contraseña" character varying(25),
    email character varying(50),
    color character varying(20),
    promedio integer
);
    DROP TABLE public.estudiante;
       public         heap    postgres    false            �            1259    16918    estudiante_matricula_seq    SEQUENCE     �   CREATE SEQUENCE public.estudiante_matricula_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.estudiante_matricula_seq;
       public          postgres    false    216                       0    0    estudiante_matricula_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.estudiante_matricula_seq OWNED BY public.estudiante.matricula;
          public          postgres    false    215            �            1259    16913    persona    TABLE       CREATE TABLE public.persona (
    ci character varying(20) NOT NULL,
    departamento character varying(25),
    nombre character varying(20),
    paterno character varying(20),
    materno character varying(20),
    genero character varying(1),
    fechanac date
);
    DROP TABLE public.persona;
       public         heap    postgres    false            u           2604    16946    administrador id_admin    DEFAULT     �   ALTER TABLE ONLY public.administrador ALTER COLUMN id_admin SET DEFAULT nextval('public.administrador_id_admin_seq'::regclass);
 E   ALTER TABLE public.administrador ALTER COLUMN id_admin DROP DEFAULT;
       public          postgres    false    220    219    220            t           2604    16934    docente id_doc    DEFAULT     p   ALTER TABLE ONLY public.docente ALTER COLUMN id_doc SET DEFAULT nextval('public.docente_id_doc_seq'::regclass);
 =   ALTER TABLE public.docente ALTER COLUMN id_doc DROP DEFAULT;
       public          postgres    false    217    218    218            s           2604    16922    estudiante matricula    DEFAULT     |   ALTER TABLE ONLY public.estudiante ALTER COLUMN matricula SET DEFAULT nextval('public.estudiante_matricula_seq'::regclass);
 C   ALTER TABLE public.estudiante ALTER COLUMN matricula DROP DEFAULT;
       public          postgres    false    215    216    216                      0    16943    administrador 
   TABLE DATA           [   COPY public.administrador (ci, id_admin, usuario, "contraseña", email, color) FROM stdin;
    public          postgres    false    220   �#                 0    16931    docente 
   TABLE DATA           S   COPY public.docente (ci, id_doc, usuario, "contraseña", email, color) FROM stdin;
    public          postgres    false    218   $                 0    16919 
   estudiante 
   TABLE DATA           c   COPY public.estudiante (ci, matricula, usuario, "contraseña", email, color, promedio) FROM stdin;
    public          postgres    false    216   k$                 0    16913    persona 
   TABLE DATA           _   COPY public.persona (ci, departamento, nombre, paterno, materno, genero, fechanac) FROM stdin;
    public          postgres    false    214   1%                  0    0    administrador_id_admin_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.administrador_id_admin_seq', 1, true);
          public          postgres    false    219                        0    0    docente_id_doc_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.docente_id_doc_seq', 1, true);
          public          postgres    false    217            !           0    0    estudiante_matricula_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.estudiante_matricula_seq', 4, true);
          public          postgres    false    215            }           2606    16948     administrador administrador_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.administrador
    ADD CONSTRAINT administrador_pkey PRIMARY KEY (id_admin);
 J   ALTER TABLE ONLY public.administrador DROP CONSTRAINT administrador_pkey;
       public            postgres    false    220            {           2606    16936    docente docente_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.docente
    ADD CONSTRAINT docente_pkey PRIMARY KEY (id_doc);
 >   ALTER TABLE ONLY public.docente DROP CONSTRAINT docente_pkey;
       public            postgres    false    218            y           2606    16924    estudiante estudiante_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.estudiante
    ADD CONSTRAINT estudiante_pkey PRIMARY KEY (matricula);
 D   ALTER TABLE ONLY public.estudiante DROP CONSTRAINT estudiante_pkey;
       public            postgres    false    216            w           2606    16917    persona persona_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (ci);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public            postgres    false    214            ~           2606    16925    estudiante ci    FK CONSTRAINT     i   ALTER TABLE ONLY public.estudiante
    ADD CONSTRAINT ci FOREIGN KEY (ci) REFERENCES public.persona(ci);
 7   ALTER TABLE ONLY public.estudiante DROP CONSTRAINT ci;
       public          postgres    false    216    3191    214                       2606    16937 
   docente ci    FK CONSTRAINT     f   ALTER TABLE ONLY public.docente
    ADD CONSTRAINT ci FOREIGN KEY (ci) REFERENCES public.persona(ci);
 4   ALTER TABLE ONLY public.docente DROP CONSTRAINT ci;
       public          postgres    false    218    214    3191            �           2606    16949    administrador ci    FK CONSTRAINT     l   ALTER TABLE ONLY public.administrador
    ADD CONSTRAINT ci FOREIGN KEY (ci) REFERENCES public.persona(ci);
 :   ALTER TABLE ONLY public.administrador DROP CONSTRAINT ci;
       public          postgres    false    220    214    3191               2   x����4�LKL*��442615�p�s3s���s9����M�͹b���� 8Mi         C   x����442�L,*)-�LL� ��������\�?��2ά��<�I�����Q�1W� �5          �   x�U�A� ��p����]O�	� bC�ژ��7"(eC��~��äW����=��9i*�Lp�8B�1����~�a]2�����Khd�"Aa�׏1�ppV��9CJ�`�V�p�=b��
P�q�p�-��n%�u���2�1�d)��k2
$1����?��AI)�̾Ӿb�� �zfP         b   x�342��ITH���M,�L�����4200�50�52�24 C�2�I¤8��3�s�q(1�o�1aL8��J��J1L�D����� P+�     