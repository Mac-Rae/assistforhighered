/**
 * Advanced OpenReports, SugarCRM Reporting.
 * @package Advanced OpenReports for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

function openAdvisorsPopup() {
    const modal = document.getElementById('myModal');
    modal.style.display="block";

}

function closeAdvisorModal(){
    const modal = document.getElementById('myModal');
    modal.style.display="none";
}

function openPopupUsers(fieldname){
    var popupRequestData = {
        "call_back_function": "set_contact_return",
        "form_name": "DetailView",
        "field_to_name_array": {
            "id": fieldname + "_id",
            "name": `${fieldname}`
        }
    };

    open_popup('Users', '600', '400', '', true, false, popupRequestData);
    
}

function set_contact_return(popup_reply_data) {
    const keys = Object.keys(popup_reply_data.name_to_value_array);
    const values = Object.values(popup_reply_data.name_to_value_array);
    const id = document.getElementById(keys[0]);
    const text = document.getElementById(keys[1]);
    id.value = values[0];
    text.value = values[1];
}